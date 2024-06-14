<?php

class __Mustache_932bef39861756a21f58fddf5ef70924 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $value = $context->find('currentvalue');
        $buffer .= $this->section614f1fd6421cfc7b66b7722faaa2a835($context, $indent, $value);
        $value = $context->find('currentvalue');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                $context->pushBlockContext(array(
                    'label' => array($this, 'block8432c322916752879196ede25d504377'),
                    'placeholder' => array($this, 'block8432c322916752879196ede25d504377'),
                    'additionalattributes' => array($this, 'blockB970d147907ae2fb253cc779020c50b3'),
                ));
                $buffer .= $parent->renderInternal($context, $indent);
                $context->popBlockContext();
            }
        }
        $buffer .= $indent . '<input type="hidden" name="search" id="user-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';

        return $buffer;
    }

    private function sectionDe377c25f950ca10002bd456ea1f8d3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchusers, core
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            searchusers, core
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06fdcee45808fd0f446c5c360fafa3a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearsearch, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearsearch, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1334c11b5ab82eacb99d00f171e354a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clear';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clear';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section614f1fd6421cfc7b66b7722faaa2a835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< core/search_input_auto }}
        {{$label}}{{#str}}
            searchusers, core
        {{/str}}{{/label}}
        {{$value}}{{currentvalue}}{{/value}}
        {{$additionalattributes}}
            aria-autocomplete="list"
            data-input-element="user-input-{{uniqid}}"
        {{/additionalattributes}}
    {{/ core/search_input_auto }}
    <a class="ml-2 btn btn-link border-0 align-self-center" href="{{resetlink}}" data-action="resetpage" role="link" aria-label="{{#str}}clearsearch, core{{/str}}">
        {{#str}}clear{{/str}}
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                    $context->pushBlockContext(array(
                        'label' => array($this, 'block8432c322916752879196ede25d504377'),
                        'value' => array($this, 'block6461ec0d6ca7ef922be0d61813a9ee9a'),
                        'additionalattributes' => array($this, 'blockB970d147907ae2fb253cc779020c50b3'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= $indent . '    <a class="ml-2 btn btn-link border-0 align-self-center" href="';
                $value = $this->resolveValue($context->find('resetlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="resetpage" role="link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section06fdcee45808fd0f446c5c360fafa3a2($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section1334c11b5ab82eacb99d00f171e354a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8432c322916752879196ede25d504377($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionDe377c25f950ca10002bd456ea1f8d3b($context, $indent, $value);
    
        return $buffer;
    }

    public function block6461ec0d6ca7ef922be0d61813a9ee9a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockB970d147907ae2fb253cc779020c50b3($context)
    {
        $indent = $buffer = '';
        $buffer .= '            aria-autocomplete="list"
';
        $buffer .= $indent . '            data-input-element="user-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
