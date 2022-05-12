<?php if(count($flats)): ?>
    <?php krsort($flats); ?>
    <table cellpadding="1" cellspacing="1" style = "border:3px inset black; text-align:center">
        <?php foreach($flats as $floor => $rooms): ?>
            <tr >
                <td style = "border:2px inset black"><?= $floor." Поверх"?></td>
                <?php foreach($rooms as $room_number => $options): ?>
                    <td >
                        <?php if('booked' == $options['status'])
                        {
                            $status_css = 'booked';
                        }
                        else if('cleaning' == $options['status'])
                        {
                            $status_css = 'cleaning';
                        }
                        else
                        {
                            $status_css = '';
                        }
                        ?>
                        <div class="cell <?= $status_css ?>" style = "border:2px inset black;">
                        <?= " Кімната {$room_number} <br />"?>
                        <?= "Ціна: {$options['price']}  "?>
                        </div>
                    </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
<?php else: ?>
    <p>No data found!</p>
<?php endif ?>