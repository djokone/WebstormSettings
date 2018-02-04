<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * ${NAME} Controller
 *
 * @property \App\Model\Table\\${NAME} \$${NAME}
 */
class MarquesController extends AppController
{

}