//modal 1
$('.modal1').on('click',function(){
    $('#modal1show').modal({
        show: true,
    })

    var myvalue = this.name;
    $('#modal1id').attr('value',myvalue);
});

//modal 2
$('.modal2').on('click',function(){
    $('#modal2show').modal({
        show: true,
    })

    var myvalue = this.name;
    $('#modal2id').attr('value',myvalue);
});

//modal 3
$('.modal3').on('click',function(){
    $('#modal3show').modal({
        show: true,
    })

    var myvalue = this.name;
    var myvalue2 = this.name;
    $('#modal3id').attr('value',myvalue);
    $('#modal3id2').attr('value',myvalue2);
});

//modal 4
$('.modal4').on('click',function(){
    $('#modal4show').modal({
        show: true,
    })

    var myvalue = this.name;
    $('#modal4id').attr('value',myvalue);
});


// input hanya angka
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

//preview gambar upload
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#tampilgambar').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//munculkan dan hilangkan objek
function changeFunc($i) {
    if($i == "tambah"){
        document.getElementById('pilihan').style.display='inline';
    }else{
        document.getElementById('pilihan').style.display='none';
    }
}

$("#tampilinputgambar").change(function() {
    if(this.checked) {
        document.getElementById('inputgambar').style.display='inline';
        document.getElementById('gambartext').value ='Iya, gambar akan muncul di list artikel dan view artikel';
    }else{
        document.getElementById('inputgambar').style.display='none';
        document.getElementById('gambartext').value ='Tidak';
    }
});

$("#artikelpilihan").change(function() {
    if(this.checked) {
        document.getElementById('artikeltext').value ='Iya, artikel akan muncul di slideshow';
    }else{
        document.getElementById('artikeltext').value ='Tidak';
    }
});
