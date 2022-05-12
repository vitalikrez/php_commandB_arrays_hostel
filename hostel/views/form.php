<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="booking">Виберіть кімнату</label>
    <select name="booking" id="booking">
        <?php foreach ($flats as $floor => $rooms): ?>
            <optgroup label="<?= $floor ?> Поверх">
                <?php foreach ($rooms as $room_name => $opt): ?>                    
                    <?php $disabled = ('booked' == $opt['status'])? "display:none":""; ?>
                    <option value="<?= "{$floor}|{$room_name}" ?>" style="<?= $disabled ?>" >
                        <?php echo " {$room_name} Кімната (Ціна: {$opt['price']})" ?>
                    </option>
                <?php endforeach ?>
            </optgroup>
        <?php endforeach  ?>
    </select>
    <div class = "color_status" style = "background-color:#02E800">Вільна </div>
    <div class = "color_status" style = "background-color:#5B1313; color:white;">Зарезервована</div>
    <div class = "color_status" style = "background-color:#FFE143">Прибирання</div>
    <input type="submit" class="btn btn-warning" name="go" value="Зарезервувати">
</form>