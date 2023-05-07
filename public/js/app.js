$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// 使用全域變數 使其在每個頁面都可以吃到這個function
deletePost = function(id){
    let result = confirm('確定刪除嗎?');
    // console.log(result);
    if(result){
        let actionUrl = '/posts/' + id;
        // console.log(actionUrl);
        $.post(actionUrl, {_method: 'delete'}).done(function(){
            window.location.reload();
        });
    }
}