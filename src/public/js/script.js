window.onload = function() 
{   //charge a la fin de la lecture du dossier

    //capturer le bouton 
    let btnRefresh = document.querySelector('#btnRefresh'); //scan le html a la recherche d un id btnRefresh
    if (btnRefresh) {   //savoir si le bouton existe
            // creer une ecoute dessus
            btnRefresh.addEventListener('click', refreshData);
    }

    function refreshData() {  //communique avec une API
        let xhttp = new XMLHttpRequest(); // requete asynchrone
        xhttp.open("GET", "https://api.themoviedb.org/3/search/movie?api_key=6985e562c05ec6150e49c
        08a88da0226&language=fr&page=1&include_adult=false&query=matrix");
        xhttp.send(); // on envoie et on attend

        xhttp.onreadystatechange = function() {   //detecte retour de l API

                if(this.readyState === 4 && this.status === 200) {  // conditions pour que l API reponde
                        let dataApi = JSON.parse(this.responseText);  //convert JSON en autre language
                        console.log(dataApi);

                        let contentMovies = document.querySelector('#listMovie').value;; // capture la div qui contient les annonces

                        let html = '';
                        for(movie of dataApi) {
                        
                        html += '<div class="card" style="width: 18rem;">' +
                                '<img src="'+ movie.movies_poster +'" class="card-img-top" alt="...">' +
                                '<div class="card-body">' +
                                '<h5 class="card-header">'+ movie.movies_name +'</h5>' +
                                '<p class="card-text">'+ movie.movies_year +'</p>' +
                                '<a href="?page=ad&id='+ movie.movies_id + '" class="btn btn-primary">Voir l\'annonce</a>' +
                        '</div>' +
                    '</div>';
                        }


                        console.log(html);
                        contentAds.innerHTML = html;
                        
                        

        }
    }

    }

}