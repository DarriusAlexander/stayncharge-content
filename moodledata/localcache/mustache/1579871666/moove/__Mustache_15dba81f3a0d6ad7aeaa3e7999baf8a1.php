<?php

class __Mustache_15dba81f3a0d6ad7aeaa3e7999baf8a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'block3d4065a38415c1906b1a53d231d5aee0'),
                'discussion_list_output' => array($this, 'blockA5cd56a56d98c766ad987b3d3282bfe2'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section60562f50222dfd2822e50e7da0116b1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewdiscussion, forum';
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
                
                $buffer .= 'addanewdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0c50e9ce334f65a4b0266831f11cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussthistopic, forum';
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
                
                $buffer .= 'discussthistopic, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9449e6171de0b6765422ea7d1d74f6cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' repliesmany, forum, {{discussionrepliescount}} ';
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
                
                $buffer .= ' repliesmany, forum, ';
                $value = $this->resolveValue($context->find('discussionrepliescount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8d3d417c1472bd391acdd861246f413(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} repliesmany, forum, {{discussionrepliescount}} {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9449e6171de0b6765422ea7d1d74f6cd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6bd2c4869de9ba46983dd1bc2645b54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' repliesone, forum, {{discussionrepliescount}} ';
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
                
                $buffer .= ' repliesone, forum, ';
                $value = $this->resolveValue($context->find('discussionrepliescount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42cc45d5f43095cedf58b408ca937fab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unreadpostsnumber, mod_forum, {{discussionunreadscount}} ';
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
                
                $buffer .= ' unreadpostsnumber, mod_forum, ';
                $value = $this->resolveValue($context->find('discussionunreadscount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA07d71c922e73f664b33836f2e3f1d24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} unreadpostsnumber, mod_forum, {{discussionunreadscount}} {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section42cc45d5f43095cedf58b408ca937fab($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6096d2d75d11f34eb72d9798a6d4215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unreadpostsone, mod_forum ';
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
                
                $buffer .= ' unreadpostsone, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82941acd3178be92d5942331181f9c68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                       <span class="sep">/</span>
                       <span class="unread"><a href="{{urls.discuss}}#unread">{{#isunreadplural}}{{#str}} unreadpostsnumber, mod_forum, {{discussionunreadscount}} {{/str}}{{/isunreadplural}}{{^isunreadplural}}{{#str}} unreadpostsone, mod_forum {{/str}}{{/isunreadplural}}</a></span>';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                       <span class="sep">/</span>
';
                $buffer .= $indent . '                       <span class="unread"><a href="';
                $value = $this->resolveValue($context->findDot('urls.discuss'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#unread">';
                // 'isunreadplural' section
                $value = $context->find('isunreadplural');
                $buffer .= $this->sectionA07d71c922e73f664b33836f2e3f1d24($context, $indent, $value);
                // 'isunreadplural' inverted section
                $value = $context->find('isunreadplural');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionA6096d2d75d11f34eb72d9798a6d4215($context, $indent, $value);
                }
                $buffer .= '</a></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52315071439d23f3a4e397efad787435(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
           {{< mod_forum/forum_discussion_post }}
               {{$footer}}
                   <div class="link text-right">
                       <a href="{{urls.discuss}}">{{#str}}discussthistopic, forum{{/str}}</a>&nbsp;({{#isreplyplural}}{{#str}} repliesmany, forum, {{discussionrepliescount}} {{/str}}{{/isreplyplural}}{{^isreplyplural}}{{#str}} repliesone, forum, {{discussionrepliescount}} {{/str}}{{/isreplyplural}}{{#discussionunreadscount}}
                       <span class="sep">/</span>
                       <span class="unread"><a href="{{urls.discuss}}#unread">{{#isunreadplural}}{{#str}} unreadpostsnumber, mod_forum, {{discussionunreadscount}} {{/str}}{{/isunreadplural}}{{^isunreadplural}}{{#str}} unreadpostsone, mod_forum {{/str}}{{/isunreadplural}}</a></span>{{/discussionunreadscount}})
                   </div>
               {{/footer}}
               {{$replyoutput}}{{/replyoutput}}
           {{/ mod_forum/forum_discussion_post }}
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
                
                $buffer .= $indent . '           ';
                if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $context->pushBlockContext(array(
                        'footer' => array($this, 'block6014becaa9beec6c8d199d70db42fa95'),
                        'replyoutput' => array($this, 'blockD41d8cd98f00b204e9800998ecf8427e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block3d4065a38415c1906b1a53d231d5aee0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block6014becaa9beec6c8d199d70db42fa95($context)
    {
        $indent = $buffer = '';
        $buffer .= '                   <div class="link text-right">
';
        $buffer .= $indent . '                       <a href="';
        $value = $this->resolveValue($context->findDot('urls.discuss'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBe0c50e9ce334f65a4b0266831f11cae($context, $indent, $value);
        $buffer .= '</a>&nbsp;(';
        // 'isreplyplural' section
        $value = $context->find('isreplyplural');
        $buffer .= $this->sectionC8d3d417c1472bd391acdd861246f413($context, $indent, $value);
        // 'isreplyplural' inverted section
        $value = $context->find('isreplyplural');
        if (empty($value)) {
            
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE6bd2c4869de9ba46983dd1bc2645b54($context, $indent, $value);
        }
        // 'discussionunreadscount' section
        $value = $context->find('discussionunreadscount');
        $buffer .= $this->section82941acd3178be92d5942331181f9c68($context, $indent, $value);
        $buffer .= ')
';
        $buffer .= $indent . '                   </div>
';
    
        return $buffer;
    }

    public function blockD41d8cd98f00b204e9800998ecf8427e($context)
    {
        $indent = $buffer = '';
    
        return $buffer;
    }

    public function blockA5cd56a56d98c766ad987b3d3282bfe2($context)
    {
        $indent = $buffer = '';
        // 'posts' section
        $value = $context->find('posts');
        $buffer .= $this->section52315071439d23f3a4e397efad787435($context, $indent, $value);
    
        return $buffer;
    }
}
