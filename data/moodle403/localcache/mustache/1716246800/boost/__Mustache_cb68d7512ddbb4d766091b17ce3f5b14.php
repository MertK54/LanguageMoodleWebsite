<?php

class __Mustache_cb68d7512ddbb4d766091b17ce3f5b14 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mt-5 mb-1 activity-navigation container-fluid">
';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'block424e75a1417c1c6f530e157018316d28'),
                'column2' => array($this, 'block1c8904a4f48aa358060fc2910fcbda11'),
                'column3' => array($this, 'block1680d9858098de7695c96e5d0ef6f088'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section490440062d62727ec9d762c45f0157fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_link }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block424e75a1417c1c6f530e157018316d28($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="float-left">
';
        $buffer .= $indent . '            ';
        $value = $context->find('prevlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function block1c8904a4f48aa358060fc2910fcbda11($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="mdl-align">
';
        $buffer .= $indent . '            ';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function block1680d9858098de7695c96e5d0ef6f088($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="float-right">
';
        $buffer .= $indent . '            ';
        $value = $context->find('nextlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
