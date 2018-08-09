<?php
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use Support\Repositorios\CrudRepository;

class ${NAME} extends CrudRepository
{
    protected \$modelClass = ${modelClass}::class;
}