<?php

class __Mustache_5ba94a94b3c4b80caaa96e7f193bd772 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '        <div id="page-header" class="frontpage-guest-header">
';
        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->section832002ae01f02fc90d90e98bdf9b3237($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'sliderenabled' inverted section
        $value = $context->find('sliderenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="row" id="loginbox">
';
            $buffer .= $indent . '                    <div class="col-sm-12 hidden-sm-down ';
            // 'disablefrontpageloginbox' section
            $value = $context->find('disablefrontpageloginbox');
            $buffer .= $this->sectionFcf804eb49bc60eefe137c8157d2814e($context, $indent, $value);
            // 'disablefrontpageloginbox' inverted section
            $value = $context->find('disablefrontpageloginbox');
            if (empty($value)) {
                
                $buffer .= 'col-md-7';
            }
            $buffer .= '" id="intro">
';
            // 'bannerheading' section
            $value = $context->find('bannerheading');
            $buffer .= $this->sectionCc4cec293d2e21ac532c663c38a88380($context, $indent, $value);
            // 'bannercontent' section
            $value = $context->find('bannercontent');
            $buffer .= $this->sectionC35748476c3337185b26cebeff32701a($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            // 'disablefrontpageloginbox' inverted section
            $value = $context->find('disablefrontpageloginbox');
            if (empty($value)) {
                
                $buffer .= $indent . '                        <div class="col-12 col-sm-12 col-md-5 card d-none d-lg-block" id="boxForm">
';
                if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div><!-- end of .card-body -->
';
            }
            $buffer .= $indent . '                </div> <!-- end of #boxForm -->
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'shoulddisplaymarketing' section
        $value = $context->find('shoulddisplaymarketing');
        $buffer .= $this->section746a69c28ebf8df2ee2ca25b24a902f7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_numbers')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_sponsorsclients')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section62dc74942f8f74da39e8fa87c6db09ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>theme_moove/slideshow}}

                    {{^disablefrontpageloginbox}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/disablefrontpageloginbox}}
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
                
                if ($partial = $this->mustache->loadPartial('theme_moove/slideshow')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '
';
                // 'disablefrontpageloginbox' inverted section
                $value = $context->find('disablefrontpageloginbox');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div id="loginbox" class="d-none d-lg-block">
';
                    $buffer .= $indent . '                            <div class="card" id="boxForm">
';
                    if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                ');
                    }
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section832002ae01f02fc90d90e98bdf9b3237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#sliderfrontpage}}
                    {{>theme_moove/slideshow}}

                    {{^disablefrontpageloginbox}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/disablefrontpageloginbox}}
                {{/sliderfrontpage}}
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
                
                // 'sliderfrontpage' section
                $value = $context->find('sliderfrontpage');
                $buffer .= $this->section62dc74942f8f74da39e8fa87c6db09ba($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcf804eb49bc60eefe137c8157d2814e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-md-12';
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
                
                $buffer .= 'col-md-12';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc4cec293d2e21ac532c663c38a88380(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h1>{{{ bannerheading }}}</h1>
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
                
                $buffer .= $indent . '                            <h1>';
                $value = $this->resolveValue($context->find('bannerheading'), $context);
                $buffer .= $value;
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC35748476c3337185b26cebeff32701a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2>{{{ bannercontent }}}</h2>
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
                
                $buffer .= $indent . '                            <h2>';
                $value = $this->resolveValue($context->find('bannercontent'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6515921ebed09b30647fa476eebd4abf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readmore, theme_moove';
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
                
                $buffer .= 'readmore, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f4fe2bc944f363a2a09ff405971ac93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing1url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing1url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fd7a0f111ca78bee30ac856fb4e5353(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing2url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing2url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb00b7a84c8e09f2d546a371733f6276(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing3url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing3url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3803e1ec613ca0d75241a8d76e470ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing4url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing4url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section746a69c28ebf8df2ee2ca25b24a902f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="frontpage-marketing row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{{ marketing1icon }}}" />
                    <h2>{{{ marketing1heading }}}</h2>
                    <h3>{{{ marketing1subheading }}}</h3>
                    <p>{{{ marketing1content }}}</p>
                    {{#marketing1url}}<a class="btn btn-primary" href="{{{ marketing1url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing1url}}
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{{ marketing2icon }}}" />
                    <h2>{{{ marketing2heading }}}</h2>
                    <h3>{{{ marketing2subheading }}}</h3>
                    <p>{{{ marketing2content }}}</p>
                    {{#marketing2url}}<a class="btn btn-primary" href="{{{ marketing2url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing2url}}
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{{ marketing3icon }}}" />
                    <h2>{{{ marketing3heading }}}</h2>
                    <h3>{{{ marketing3subheading }}}</h3>
                    <p>{{{ marketing3content }}}</p>
                    {{#marketing3url}}<a class="btn btn-primary" href="{{{ marketing3url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing3url}}
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img src="{{{ marketing4icon }}}" />
                    <h2>{{{ marketing4heading }}}</h2>
                    <h3>{{{ marketing4subheading }}}</h3>
                    <p>{{{ marketing4content }}}</p>
                    {{#marketing4url}}<a class="btn btn-primary" href="{{{ marketing4url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing4url}}
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
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
                
                $buffer .= $indent . '          <div class="frontpage-marketing row">
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                  <div class="card-body">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('marketing1icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                    <h2>';
                $value = $this->resolveValue($context->find('marketing1heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <h3>';
                $value = $this->resolveValue($context->find('marketing1subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('marketing1content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    ';
                // 'marketing1url' section
                $value = $context->find('marketing1url');
                $buffer .= $this->section1f4fe2bc944f363a2a09ff405971ac93($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                  <div class="card-body">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('marketing2icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                    <h2>';
                $value = $this->resolveValue($context->find('marketing2heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <h3>';
                $value = $this->resolveValue($context->find('marketing2subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('marketing2content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    ';
                // 'marketing2url' section
                $value = $context->find('marketing2url');
                $buffer .= $this->section6fd7a0f111ca78bee30ac856fb4e5353($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                  <div class="card-body">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('marketing3icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                    <h2>';
                $value = $this->resolveValue($context->find('marketing3heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <h3>';
                $value = $this->resolveValue($context->find('marketing3subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('marketing3content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    ';
                // 'marketing3url' section
                $value = $context->find('marketing3url');
                $buffer .= $this->sectionEb00b7a84c8e09f2d546a371733f6276($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                  <div class="card-body">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('marketing4icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                    <h2>';
                $value = $this->resolveValue($context->find('marketing4heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <h3>';
                $value = $this->resolveValue($context->find('marketing4subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('marketing4content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    ';
                // 'marketing4url' section
                $value = $context->find('marketing4url');
                $buffer .= $this->sectionB3803e1ec613ca0d75241a8d76e470ce($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="clearfix"></div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
