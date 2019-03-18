<canvas id="{{ $id }}" width="{{ $width }}" height="{{ $height }}"></canvas>
<script>
    $(function () {
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, @jsonp($options));
    });
</script>
