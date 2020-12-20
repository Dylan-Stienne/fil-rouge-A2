getFriends();

function pipeUcfirst(item) {
    return `${item.substr(0, 1).toUpperCase() + item.substr(1)}`
}

$("#searching-input").keyup(function () {
    $("#searching-list").empty();
    if ($(this).val() != "") {
        $.ajax({
            url: "?action=search-user",
            method: "POST",
            dataType: 'json',
            data: {
                usernamePart: $(this).val()
            },
            success: function (response) {
                response.forEach(user => {
                    $("#searching-list").append(`<li><button class="btn" onclick="addFriend(${user.id}, '${pipeUcfirst(user.username)}')">Ajouter ${pipeUcfirst(user.username)} en amis</button></li>`)
                });
            }
        })
    }
});

function getFriends() {
    $.ajax({
        url: "?action=get-friends",
        dataType: 'json',
        success: function (response) {
            $("#my-friends").empty();
            response.forEach(user => {
                $("#my-friends").append(`
                    <tr>
                        <td class="friend">${pipeUcfirst(user.username)}<span class="connected-${user.is_connected}"></span></td>
                        <td><button class="btn" onclick="removeFriend(${user.id})">Ne plus être amis</button></td>
                    </tr>
                `)
            });
        }
    })
}

function addFriend(friendId, friendName) {
    $.ajax({
        url: "?action=add-friend",
        method: "POST",
        dataType: 'json',
        data: {
            friendId: friendId
        },
        success: function (response) {
            if (response) {
                $("#searching-list").text(`${friendName} a été ajouté à vos amis`);
                getFriends();
            }
        }
    })
}

function removeFriend(friendId) {
    $.ajax({
        url: "?action=remove-friend",
        method: "POST",
        dataType: 'json',
        data: {
            friendId: friendId
        },
        success: function (response) {
            if (response) {
                getFriends();
            }
        }
    })
}
