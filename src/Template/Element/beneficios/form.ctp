<?php
            echo $this->Form->control('negocio');
            echo $this->Form->control('descuento');
            echo $this->Form->control('photo', ['type' => 'file']);
            echo $this->Form->control('categoria', ['type' => 'select', 'options'=>$categories]);
        ?>