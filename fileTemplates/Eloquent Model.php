<?php
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

class ${NAME} extends Model
{
    protected \$table = '${Table}';
    
    protected \$primaryKey = '${PrimaryKey}';
    
    protected \$fillable = [];
    
    public \$timestamps = false;
}