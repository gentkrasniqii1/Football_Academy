function showPlayers(group) {
    const container = document.getElementById("players-container");
    container.innerHTML = ""; // Pastro përmbajtjen e mëparshme

    fetch(`get_players.php?group=${group}`)
        .then(response => response.json())
        .then(players => {
            if (players.length === 0) {
                container.innerHTML = `<p>Nuk ka lojtarë të regjistruar për grupmoshën ${group.toUpperCase()}.</p>`;
                return;
            }

            players.forEach((player, index) => {
                const playerBox = document.createElement("div");
                playerBox.className = "player-box";
                playerBox.innerHTML = `
                    <h4>${index + 1}. Emri: ${player.name} ${player.surname}</h4>
                    <p>Mosha: ${player.age}</p>
                    <p>Grupmosha: ${player.group_age.toUpperCase()}</p>
                    <p>Pozita: ${player.position}</p>
                    <p>Email: ${player.email}</p>
                `;
                container.appendChild(playerBox);
            });

            // Stilet për shfaqjen e lojtarëve
            container.style.display = "flex";
            container.style.flexWrap = "wrap";
            container.style.justifyContent = "center";
        })
        .catch(error => console.error('Gabim në marrjen e lojtarëve:', error));
}
