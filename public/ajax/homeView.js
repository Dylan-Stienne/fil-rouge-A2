getSurveysCategories();

if(localStorage.getItem('isConnected')){
    getFriendsSurveys();
    getMySurveys();
}
else{
    $('.flex-container').css('display', 'none');
}



function pipeUcfirst(item) {
    return `${item.substr(0, 1).toUpperCase() + item.substr(1)}`
}

$.urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    }
    else {
        return results[1].replace(/%20/g, ' ') || 0;
    }
}

searching = $.urlParam('search')
if (searching !== null) {
    findSurveys(searching);
}
else {
    findSurveys('');
}

function getSurveysCategories() {
    $.ajax({
        url: "?action=get-surveys-categories",
        dataType: 'json',
        success: function (response) {
            $("#surveys-categories").empty();
            response.forEach(category => {
                $("#surveys-categories").append(`
                    <li class="btn" onClick="findSurveys('${category.name}')">${pipeUcfirst(category.name)}</li>
                `)
            });
        }
    })
}

function getFriendsSurveys() {
    $.ajax({
        url: "?action=get-friends-surveys",
        dataType: 'json',
        success: function (response) {
            $("#friends-surveys").empty();
            response.forEach(survey => {
                $("#friends-surveys").append(`
                    <li class="survey">
                        <label class="btn" onClick="findSurveys('${survey.survey_category}')">
                            ${pipeUcfirst(survey.survey_category)}
                        </label>
                        <a href="?page=survey&survey=${survey.survey_id}">
                            <div class="content">
                                <h3>${pipeUcfirst(survey.survey_title)}</h3>
                                <div class="about">
                                    <p>Créé par ${pipeUcfirst(survey.friend_username)}</p>
                                    <p>${survey.answers_count} personnes ont répondu</p>
                                    <p>${survey.choices_count} réponses proposés</p>
                                </div>
                            </div>
                        </a>
                    </li>            
                `)
            });
        }
    })
}

function getMySurveys() {
    $.ajax({
        url: "?action=get-my-surveys",
        dataType: 'json',
        success: function (response) {
            $("#my-surveys").empty();
            response.forEach(survey => {
                $("#my-surveys").append(`
                    <li class="survey">
                        <label class="btn" onClick="findSurveys('${survey.survey_category}')">
                            ${pipeUcfirst(survey.survey_category)}
                        </label>
                        <a href="?page=survey&survey=${survey.survey_id}">
                            <div class="content">
                                <h3>${pipeUcfirst(survey.survey_title)}</h3>
                                <div class="about">
                                    <p>${survey.answers_count} personnes ont répondu</p>
                                    <p>${survey.choices_count} réponses proposés</p>
                                </div>
                            </div>
                        </a>
                    </li>               
                `)
            });
        }
    })
}

function findSurveys(searching) {
    $.ajax({
        url: "?action=find-surveys",
        dataType: 'json',
        method: 'POST',
        data: {
            searching: searching
        },
        success: function (response) {
            searching == '' ? $("#find-surveys-label").text('Sondages récents') : $("#find-surveys-label").text(`Résultats pour ${searching}`);

            $("#find-surveys").empty();
            if (response.length == 0) {
                $("#find-surveys").append("<h3>Aucun résultat</h3>");
            }
            response.forEach(survey => {
                $("#find-surveys").append(`
                    <li class="survey">
                        <label class="btn" onClick="findSurveys('${survey.survey_category}')">
                            ${pipeUcfirst(survey.survey_category)}
                        </label>
                        <a href="?page=survey&survey=${survey.survey_id}">
                            <div class="content">
                                <h3>${pipeUcfirst(survey.survey_title)}</h3>
                                <div class="about">
                                    <p>Créé par ${pipeUcfirst(survey.friend_username)}</p>
                                    <p>${survey.answers_count} personnes ont répondu</p>
                                    <p>${survey.choices_count} réponses proposés</p>
                                </div>
                            </div>
                        </a>
                    </li>            
                `)
            });
        }
    })
}
