<?php
class UpdateViewClass
{

    public function init($connect)
    {

        $m = $this->path_show();
        if (count($m) == 4) {
            $table = $this->tableName($m[2], $m[3]);
            if ($table) {
                $this->update_view($connect, $table, $m);
            }
        }

    }

    public function update_view($connect, $table, $m)
    {
        $model_row = $m[0];
        $model = $m[1];
        $stmt = $connect->prepare("SELECT view FROM $table  WHERE  $model_row = ?");
        $stmt->execute(array($model));
        $roms = $stmt->fetch();
        $new_view = intval($roms['view']) + 1;
        $stmt = $connect->prepare("UPDATE $table SET view = ?  WHERE  $model_row = ?");
        $stmt->execute(array($new_view, $model));
    }

    public function path_show()
    {

        $model = [];
        $full_path = $_SERVER['REQUEST_URI'];
        $a = explode('/', strval($full_path));
        $device = $a[count($a) - 2];

        $b = explode('?', $a[count($a) - 1]);
        if (count($b) >= 2) {
            $current_page = $b[0];
            $q = explode('=', $b[1]);

            $model_row = $q[0];
            $model = $q[1];

        }
        return [$model_row, $model, $current_page, $device];
    }
    public function tableName($page, $device)
    {
        if ($device == 'Samsung') {

            switch ($page) {
                case 'View_Rom.php':
                    return 'samsung_device';
                    break;

                case 'View_Rom4.php':
                    return 'rom4_device';
                    break;

                case 'Combination_View.php':
                    return 'combination_device';
                    break;

                case 'View_Root.php':
                    return 'root_device';
                    break;

                case 'View_Modem.php':
                    return 'modem_device';
                    break;

                case 'View-Cert-Samsung.php':
                    return 'cert_device';
                    break;

                default:
                    return null;
                    break;
            }
        } elseif ($device == 'Sony') {
            switch ($page) {
                case 'View_Rom.php':
                    return 'sony_offecial_rom';
                    break;

                case 'View_Lock_Remove.php':
                    return 'sonydevice';
                    break;

                default:
                    return null;
                    break;
            }
        } elseif ($device == 'Nokia') {
            switch ($page) {
                case 'View_Flashes.php':
                    return 'nokiadevice';
                    break;

                default:
                    return null;
                    break;
            }
        } elseif ($device == 'Apple') {
            switch ($page) {
                case 'View_Firmware.php':
                    return 'idevice';
                    break;

                default:
                    return null;
                    break;
            }
        }

    }

}
