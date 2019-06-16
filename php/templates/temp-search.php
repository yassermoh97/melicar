<div class="row" id="back">
    <div class="row" id="search">
        <form action="temp-alquilar.php" method="POST">
            <div id="search-content">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-xl-6">
                        <label for="date1" class="search-control">Fecha de recogida</label><br>
                        <input type="date" class="option" id="option-date1" name="option-date1" required>
                        <input type="time" class="option" id="option-time1" name="option-time1" required>    
                    </div>

                    <div class="col-xs-12 col-md-6 col-xl-6">
                        <label for="date2" class="search-control">Fecha de devolución</label><br>
                        <input type="date" class="option" id="option-date2" name="option-date2" required>
                        <input type="time" class="option" id="option-time2" name="option-time2" required>     
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <input type="submit" class="boton" id="search-btn" name="search-btn" value="BUSCAR">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
