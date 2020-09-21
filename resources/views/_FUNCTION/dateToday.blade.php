<!-- Date -->
<script>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var year = date.getFullYear(); 
    
    // Atau 
    // var yy = date.getYear();
    // var year = (yy < 1000) ? yy + 1900 : yy;
    
    document.getElementById("date").innerHTML = (thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
</script>