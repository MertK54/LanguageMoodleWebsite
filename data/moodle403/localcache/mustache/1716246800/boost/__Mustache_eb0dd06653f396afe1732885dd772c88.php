<?php

class __Mustache_eb0dd06653f396afe1732885dd772c88 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->section91c2b4011c40824c42619bd1058e2103($context, $indent, $value);

        return $buffer;
    }

    private function sectionB93b7e4e5c001d45dce7ffd963651f59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-toggle="tooltip" title="';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-placement="top"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fb8f4873e24cc08353dc61cdb42dc9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activityicon, moodle, {{{pluginname}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activityicon, moodle, ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9860fe2e2b4f1927c314b63aa1dd4568(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{url}}"
            class="activity-icon activityiconcontainer smaller {{purpose}} btn btn-link courseicon align-self-start mr-2"
            {{#showtooltip}}data-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"{{/showtooltip}}
        >
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}"
            >
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            class="activity-icon activityiconcontainer smaller ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' btn btn-link courseicon align-self-start mr-2"
';
                $buffer .= $indent . '            ';
                $value = $context->find('showtooltip');
                $buffer .= $this->sectionB93b7e4e5c001d45dce7ffd963651f59($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="activityicon ';
                $value = $this->resolveValue($context->find('iconclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 alt="';
                $value = $context->find('cleanstr');
                $buffer .= $this->section5fb8f4873e24cc08353dc61cdb42dc9f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91c2b4011c40824c42619bd1058e2103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#uservisible}}
        <a href="{{url}}"
            class="activity-icon activityiconcontainer smaller {{purpose}} btn btn-link courseicon align-self-start mr-2"
            {{#showtooltip}}data-toggle="tooltip" title="{{{pluginname}}}" data-placement="top"{{/showtooltip}}
        >
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}"
            >
        </a>
    {{/uservisible}}
    {{^uservisible}}
        <div class="activity-icon activityiconcontainer smaller {{purpose}} courseicon align-self-start mr-2">
            <img src="{{{icon}}}" class="activityicon {{iconclass}}"
                 alt="{{#cleanstr}} activityicon, moodle, {{{pluginname}}} {{/cleanstr}}"
            >
        </div>
    {{/uservisible}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('uservisible');
                $buffer .= $this->section9860fe2e2b4f1927c314b63aa1dd4568($context, $indent, $value);
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="activity-icon activityiconcontainer smaller ';
                    $value = $this->resolveValue($context->find('purpose'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' courseicon align-self-start mr-2">
';
                    $buffer .= $indent . '            <img src="';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="activityicon ';
                    $value = $this->resolveValue($context->find('iconclass'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                 alt="';
                    $value = $context->find('cleanstr');
                    $buffer .= $this->section5fb8f4873e24cc08353dc61cdb42dc9f($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '            >
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
