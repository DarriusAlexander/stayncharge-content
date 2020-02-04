<?php

class __Mustache_bfddcb96d92f788daf00166d893ee1f5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="form-item row">
';
        $buffer .= $indent . '    <div class="form-label col-sm-3 text-sm-right">
';
        $buffer .= $indent . '        <label>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="form-setting col-sm-9">
';
        $buffer .= $indent . '        <div class="form-description">';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
