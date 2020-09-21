<script>
    var date = new Date();
    var hour = date.getHours();

    if (hour >= 0 && hour < 10) {
        document.write("Selamat pagi");
    } 
    else if (hour >= 10 && hour < 15) {
        document.write("Selamat siang"); 
    }
    else if (hour >= 15 && hour < 19) {
        document.write("Selamat sore");
    } 
    else if (hour >= 19 && hour < 24) {
        document.write("Selamat malam");
    }
    
</script>