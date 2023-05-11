function getCatData(){
    axios.get('./category')
    .then(function(response){
        var jsonData = response.data;

        $.each(jsonData, function(i,item){
            $('<li>').html(                
                
                "<a class='dropdown' data-id="+jsonData[i].id+">"+jsonData[i].category+ "<i class='fa-solid fa-chevron-right right-icon'></i></a>"
                // "<ul class='dropdown-item'>"+
                // "<li><a href=''>Item</a></li>"+
                // "<li><a href=''>Item</a></li>"+
                // "<li><a href=''>Item</a></li>"+
                // "<li><a href=''>Item</a></li>"+
                // "<li><a href=''>Item</a></li>"+                
                // "</ul>"
            
            ).appendTo('#category');
        });
    })
}
