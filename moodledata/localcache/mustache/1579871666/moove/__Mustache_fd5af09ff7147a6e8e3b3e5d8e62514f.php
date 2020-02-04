<?php

class __Mustache_fd5af09ff7147a6e8e3b3e5d8e62514f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container frontpage-sponsors">
';
        // 'sponsorsfrontpage' section
        $value = $context->find('sponsorsfrontpage');
        $buffer .= $this->section4e8c4418b8a7dbdd43d4a001559c1c4f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'clientsfrontpage' section
        $value = $context->find('clientsfrontpage');
        $buffer .= $this->section278bca000442fc647c398646a5d2f3c3($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section880828ca7386d95221ed2d7c8195e32b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
            </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="item">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"/>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e8c4418b8a7dbdd43d4a001559c1c4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2>{{{sponsorstitle}}}</h2>
        <p>{{{sponsorssubtitle}}}</p>
        <div class="row">
            {{#sponsors}}
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
            </div>
            {{/sponsors}}
        </div>

        <hr />
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('sponsorstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('sponsorssubtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                // 'sponsors' section
                $value = $context->find('sponsors');
                $buffer .= $this->section880828ca7386d95221ed2d7c8195e32b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <hr />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe23f2e369d574155e798dcf4e98b001(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
                </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"/>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section278bca000442fc647c398646a5d2f3c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2>{{{clientstitle}}}</h2>
        <p>{{{clientssubtitle}}}</p>
        <div class="row">
            {{#clients}}
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
                </div>
            {{/clients}}
        </div>

        <hr />
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('clientstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('clientssubtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                // 'clients' section
                $value = $context->find('clients');
                $buffer .= $this->sectionCe23f2e369d574155e798dcf4e98b001($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <hr />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
