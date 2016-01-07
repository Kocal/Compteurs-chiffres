<?php
function makeTable($datas, $section) {

    $ret = '<table>
        <thead>
            <tr>
                <th>Spécialités et options (ou sites)</th>
                <th>Nombre de contacts</th>
            </tr>
        </thead>
        <tbody>';

    foreach ($datas as $k => $v) {
        $ret .= makeRow($section, $k, $v);
    }

    $ret .= '</tbody></table>';

    return $ret;
}

function makeRow($section, $key, $value, $tab = 0) {

    $ret = '';

    if(is_integer($key)) {
        for($i = 0; $i < $tab; $i++) {
            $value = '&nbsp;' . $value;
        }

        $ret = '<tr>';
        $ret .= '<td class="key">' . $value . '</td>';

        ob_start();
        ?>
            <td class="filler">
                <input type="number" min="0" class="count" name="value" data-key="<?= md5($section . $value); ?>">    
            </td>
        <?php
        $ret .= ob_get_clean();
        $ret .= '</tr>';
    } else if(is_string($key)) {

        $ret .= makeRow($section, 0, $key);

        if(is_array($value)) {
            foreach($value as $k => $v) {
                $ret .= makeRow($section, $k, $v, $tab + 8);
            }
        }
    }

    return $ret;
}
