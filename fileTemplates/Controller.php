<?php
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

class ${NAME} extends CI_Controller
{
    public function index(#if (${ParentId}) ${ParentId} #end)
    {
    }
    
    public function store(#if (${ParentId}) ${ParentId} #end)
    {
    }
    
    
    public function show(#if (${ParentId}) ${ParentId}, #end ${ResourceId})
    {
    }
    
    
    public function update(#if (${ParentId}) ${ParentId}, #end ${ResourceId})
    {
    }
    
    
    public function delete(#if (${ParentId}) ${ParentId}, #end ${ResourceId})
    {
    }
}