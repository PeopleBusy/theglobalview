function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#article-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        /*console.log(input.files.item(0).name);
        console.log(input.files.item(0).size);
        console.log(input.files.item(0).type);*/
    }
}
$("#article-img").change(function(){
    readURL(this);
});