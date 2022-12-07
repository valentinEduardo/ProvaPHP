<?php
$luck = rand(0,5);

echo "<br>";

switch($luck):
    case 0:
        echo "você perdeu a vez";
        break;
        case 1:
            echo "avance uma casa";
            break;
            case 2:
                echo "você ganhou um bônus! avance 3 casas";
                break;
                case 3:
                    echo "você perdeu! saia do jogo";
                    break;
                    default:
                    echo "jogue novamente";
                    break;
                endswitch;
?>