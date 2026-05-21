function consumir_api() {

    var endpoint="xxxxx";

    fetch(endpoint)

    .then(function(response){
        return response.json();
    })

    .then(function(data){
        var mayor=data[0];

        for (let i = 0; i < data.length; i++) {
            if(data[i].edad>mayor.edad){
                mayor=data[i];
            }
        }
        return mayor.edad;
    })
    
}