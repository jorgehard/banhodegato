function nFormatter(num){
    if(num >= 1000000000){ 
      return (num/1000000000).toFixed(1).replace(/\.0$/,'') + 'G';
    }
    if(num >= 1000000){
      return (num/1000000).toFixed(1).replace(/\.0$/,'') + 'M';
    }
    if(num >= 1000){
      return (num/1000).toFixed(1).replace(/\.0$/,'') + 'K';
    }
    return num;
}

$.ajax({
    url:"https://www.instagram.com/projetobanhodegato?__a=1",
    type:'get',
    success:function(response){
        $(".user-instagram").html('@' + response.graphql.user.username + '<span class="seguidores-insta float-right" style="margin-right:30px; font-size:18px">' + nFormatter(response.graphql.user.edge_followed_by.count) + ' seguidores</span>');
        $(".followers").html();
        posts = response.graphql.user.edge_owner_to_timeline_media.edges;
        posts_html = '';
        for(var i=0;i<=8;i++){
            url = posts[i].node.display_url;
            //Atualizar para melhor forma de integração com slide
            nome_div = '#slide-item' + i;
            $(nome_div).html('<div style="position:relative: top:0px"><img src="'+url+'" class="rounded" width="90%" height="250px"></div>');
        }
    }
}); 