        const month = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        const days = ['Domingo', 'Lunes', 'martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        for(let i = 0 ; i < document.getElementsByClassName("recent-news-date").length ; i++){
            date = new Date(document.getElementsByClassName("recent-news-date")[i].innerText);
            document.getElementsByClassName("recent-news-date")[i].innerText = days[date.getDay()]+', '+date.getDate()+' de '+month[date.getMonth()]+' de '+date.getUTCFullYear();
        }