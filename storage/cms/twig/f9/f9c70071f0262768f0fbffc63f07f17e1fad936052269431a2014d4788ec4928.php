<?php

/* /home/vagrant/Code/octobercms/plugins/deligencetechnologies/dtworldclock/components/dtworldclock/default.htm */
class __TwigTemplate_128bf1bfbdb28ac0292f3a9d93bb4134f319e4123ff0a973bc24d1174a3f9179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["worldClock"] ?? null), "getParams", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
            // line 2
            if (($this->getAttribute($context["params"], "status", array()) == 1)) {
                // line 3
                echo "<div class=\"dt-clock-verticle\">
";
                // line 4
                $context["time1"] = $this->getAttribute(($context["worldClock"] ?? null), "getTime1", array());
                echo " 
";
                // line 5
                $context["time2"] = $this->getAttribute(($context["worldClock"] ?? null), "getTime2", array());
                // line 6
                $context["time3"] = $this->getAttribute(($context["worldClock"] ?? null), "getTime3", array());
                // line 7
                $context["time4"] = $this->getAttribute(($context["worldClock"] ?? null), "getTime4", array());
                // line 8
                if ($this->getAttribute($context["params"], "title", array())) {
                    echo "<h4 class=\"page-header\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "title", array()), "html", null, true);
                    echo "</h4> ";
                }
                echo "    
";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["worldClock"] ?? null), "getCountry", array()));
                foreach ($context['_seq'] as $context["key"] => $context["countryData"]) {
                    echo " 
  ";
                    // line 10
                    if (($this->getAttribute($context["countryData"], "show", array()) == "yes")) {
                        // line 11
                        echo "        ";
                        if (($this->getAttribute($context["params"], "clock_layout", array()) == "horizontal")) {
                            echo "<div class=\"dt-clock-horizontal\"> ";
                        } else {
                            echo " <div class=\"dt-clock-verticle-box\"> ";
                        }
                        // line 12
                        echo "        ";
                        if (($this->getAttribute($context["params"], "display_name", array()) == "yes")) {
                            echo " 
                  <div id=\"dtWorldClocksCountry_";
                            // line 13
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"></div>  
        ";
                        }
                        // line 15
                        echo "                 <div id=\"dtWorldClocksTime_";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"></div>
        ";
                        // line 16
                        if (($this->getAttribute($context["params"], "display_date", array()) != "no")) {
                            echo " <div id=\"dtWorldClocksDate_";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"></div> ";
                        }
                        // line 17
                        echo "      </div>
<script>  
\tvar currentTimes_1 = new Date('";
                        // line 19
                        echo twig_escape_filter($this->env, ($context["time1"] ?? null), "html", null, true);
                        echo "');
\tvar currentTimes_2 = new Date('";
                        // line 20
                        echo twig_escape_filter($this->env, ($context["time2"] ?? null), "html", null, true);
                        echo "');
\tvar currentTimes_3 = new Date('";
                        // line 21
                        echo twig_escape_filter($this->env, ($context["time3"] ?? null), "html", null, true);
                        echo "');
\tvar currentTimes_4 = new Date('";
                        // line 22
                        echo twig_escape_filter($this->env, ($context["time4"] ?? null), "html", null, true);
                        echo "');
\tfunction dtclockUpdate_";
                        // line 23
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "(id){ 
    var country_id = '";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute($context["countryData"], "country", array()), "html", null, true);
                        echo "';
\tvar currentTime_id = currentTimes_";
                        // line 25
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo ";
    var date_id = '";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "display_date", array()), "html", null, true);
                        echo "';
\tvar format_id = '";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "time_format", array()), "html", null, true);
                        echo "'; 
\tvar seconds_id = '";
                        // line 28
                        echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "display_seconds", array()), "html", null, true);
                        echo "';
\tvar leadingZeros_id = '";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "leading_zeros", array()), "html", null, true);
                        echo "';
    var currentTimeString_id ;
    var currentDate_id ;
    var jstime_id = new Date().getTime()-1000;
    jstime_id=jstime_id+1000;
\tvar jsnow_id = new Date().getTime();
\tvar offset_id=jsnow_id-jstime_id;
\tif(offset_id>1000){
\tjstime_id=jstime_id+offset_id;
\tvar offsetseconds_id=Math.round(offset_id/1000);
\tcurrentTime_id.setSeconds(currentTime_id.getSeconds()+offsetseconds_id);
\t}
\tcurrentTime_id.setSeconds(currentTime_id.getSeconds()+1);
\tvar currentHours_id = currentTime_id.getHours();\t\t\t
\tvar currentMinutes_id = currentTime_id.getMinutes();
\tvar currentSeconds_id = currentTime_id.getSeconds();
\t// Handles 12h format
\tif(format_id==\"12h\"){ \t
\t//save a AM/PM variable
\tif(currentHours_id < 12 ){ 
\tvar ampm_id = \"AM\";
\t} else{
\tvar ampm_id = \"PM\";
\t}
\tif(currentHours_id>12){
\tcurrentHours_id=currentHours_id-12;
\t}
\t\t\t //convert 0 to 12
\tif(currentHours_id==0){
\tcurrentHours_id=12;
    }
\t}
\t\t// Pad the hours, minutes and seconds with leading zeros, if required
   if(leadingZeros_id==\"yes\"){
\tcurrentHours_id = ( currentHours_id < 10 ? \"0\" : \"\" ) + currentHours_id; 
    currentMinutes_id = ( currentMinutes_id < 10 ? \"0\" : \"\" ) + currentMinutes_id;
\tcurrentSeconds_id = ( currentSeconds_id < 10 ? \"0\" : \"\" ) + currentSeconds_id;
\t}

    if(leadingZeros_id==\"yes\" || leadingZeros_id==\"nothour\"){
    currentMinutes_id = ( currentMinutes_id < 10 ? \"0\" : \"\" ) + currentMinutes_id;
\tcurrentSeconds_id = ( currentSeconds_id < 10 ? \"0\" : \"\" ) + currentSeconds_id;
\t}
     
\t// Compose the string for display
\tcurrentTimeString_id = currentHours_id + \":\" + currentMinutes_id; 
\t// Add seconds if that has been selected
\tif(seconds_id==\"yes\"){
\tcurrentTimeString_id = currentTimeString_id + \":\" + currentSeconds_id;
\t}
\t\t// Add AM/PM if 12h format
\tif(format_id==\"12h\"){
\tcurrentTimeString_id = currentTimeString_id + \" \" + ampm_id;
\t}
\t\t
\t\t// Handle date formating
\tif(date_id != \"no\"){
\tvar date_new = currentTime_id.getDate(); 
\tvar month = currentTime_id.getMonth()+1;
\tvar year = currentTime_id.getFullYear();
\tvar day = currentTime_id.getDay();
\tvar textMonth = \"null\";
\tif(day==1){ day=\"Mon\";}
\tif(day==2){ day=\"Tue\";}
\tif(day==3){ day=\"Wed\";}
\tif(day==4){ day=\"Thu\";}
\tif(day==5){ day=\"Fri\";}
\tif(day==6){ day=\"Sat\";}
\tif(day==0){ day=\"Sun\";}
\tif(month==\"1\"){ textMonth=\"Jan\";}
\tif(month==\"2\"){ textMonth=\"Feb\";}
\tif(month==\"3\"){ textMonth=\"Mar\";}
\tif(month==\"4\"){ textMonth=\"Apr\";}
\tif(month==\"5\"){ textMonth=\"May\";}
\tif(month==\"6\"){ textMonth=\"Jun\";}
\tif(month==\"7\"){ textMonth=\"Jul\";}
\tif(month==\"8\"){ textMonth=\"Aug\";}
\tif(month==\"9\"){ textMonth=\"Sep\";}
\tif(month==\"10\"){ textMonth=\"Oct\";}
\tif(month==\"11\"){ textMonth=\"Nov\";}
\tif(month==\"12\"){ textMonth=\"Dec\";}
\tif(leadingZeros_id==\"yes\"){
\tif(month<10) month=\"0\" + month;
\tif(date_new<10) date_new=\"0\" + date_new;
\t}
\t//Compose date string
\tswitch (date_id){ 
\t\t\t\tcase \"format1\":
\t\t\t\t\tcurrentDate_id=year + \"-\" + month + \"-\" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format2\":
\t\t\t\t\tcurrentDate_id=year + \"/\" + month + \"/\" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format3\":
\t\t\t\t\tcurrentDate_id=date_new + \"/\" + month + \"/\" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format4\":
\t\t\t\t\tcurrentDate_id=month + \"/\" + date_new + \"/\" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format5\":
\t\t\t\t\tcurrentDate_id=date_new + \" \" + textMonth;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format6\":
\t\t\t\t\tcurrentDate_id=day + \" \" + date_new + \" \" +textMonth;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format7\":
\t\t\t\t\tcurrentDate_id=textMonth + \" \" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format8\":
\t\t\t\t\tcurrentDate_id=textMonth + \" \" + date_new + \", \" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format9\":
\t\t\t\t\tcurrentDate_id=day + \" \" + textMonth + \" \" + date_new;
\t\t\t\t\tbreak;
                default :
                    currentDate_id=year + \"-\" + month + \"-\" + date_new;
\t\t\t\t
\t\t\t} 
\t\t}  
\t\tif(document.getElementById('dtWorldClocksTime_'+id)) { document.getElementById('dtWorldClocksTime_'+id).innerHTML = '<b>'+currentTimeString_id+'</b>'; }
        if(document.getElementById('dtWorldClocksCountry_'+id)) { document.getElementById('dtWorldClocksCountry_'+id).innerHTML = country_id; }
\t\tif(date_id!=\"no\"){ 
\t\t\tif(document.getElementById(\"dtWorldClocksDate_\"+id)) { document.getElementById(\"dtWorldClocksDate_\"+id).innerHTML = currentDate_id;}
\t\t}
\t}
\t
\t
</script>   
";
                    }
                    // line 157
                    echo "        
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['countryData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo " 
 <script>
if('";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "clock_1", array()), "html", null, true);
                echo "' == 'yes') setInterval(function(){dtclockUpdate_1(1);},1000); 
if('";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "clock_2", array()), "html", null, true);
                echo "' == 'yes') setInterval(function(){dtclockUpdate_2(2);},1000);
if('";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "clock_3", array()), "html", null, true);
                echo "' == 'yes') setInterval(function(){dtclockUpdate_3(3);},1000);
if('";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "clock_4", array()), "html", null, true);
                echo "' == 'yes') setInterval(function(){dtclockUpdate_4(4);},1000);
</script>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo " 


";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/octobercms/plugins/deligencetechnologies/dtworldclock/components/dtworldclock/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 167,  281 => 163,  277 => 162,  273 => 161,  269 => 160,  265 => 158,  258 => 157,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 17,  76 => 16,  71 => 15,  66 => 13,  61 => 12,  54 => 11,  52 => 10,  46 => 9,  38 => 8,  36 => 7,  34 => 6,  32 => 5,  28 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for params in worldClock.getParams %}
{% if params.status == 1 %}
<div class=\"dt-clock-verticle\">
{% set time1 = worldClock.getTime1 %} 
{% set time2 = worldClock.getTime2 %}
{% set time3 = worldClock.getTime3 %}
{% set time4 = worldClock.getTime4 %}
{% if params.title %}<h4 class=\"page-header\">{{params.title}}</h4> {% endif %}    
{% for key , countryData in worldClock.getCountry %} 
  {% if countryData.show == 'yes' %}
        {% if params.clock_layout == 'horizontal' %}<div class=\"dt-clock-horizontal\"> {% else %} <div class=\"dt-clock-verticle-box\"> {% endif %}
        {% if params.display_name == 'yes' %} 
                  <div id=\"dtWorldClocksCountry_{{key}}\"></div>  
        {% endif %}
                 <div id=\"dtWorldClocksTime_{{key}}\"></div>
        {% if params.display_date != 'no' %} <div id=\"dtWorldClocksDate_{{key}}\"></div> {% endif %}
      </div>
<script>  
\tvar currentTimes_1 = new Date('{{time1}}');
\tvar currentTimes_2 = new Date('{{time2}}');
\tvar currentTimes_3 = new Date('{{time3}}');
\tvar currentTimes_4 = new Date('{{time4}}');
\tfunction dtclockUpdate_{{key}}(id){ 
    var country_id = '{{countryData.country}}';
\tvar currentTime_id = currentTimes_{{key}};
    var date_id = '{{params.display_date}}';
\tvar format_id = '{{params.time_format}}'; 
\tvar seconds_id = '{{params.display_seconds}}';
\tvar leadingZeros_id = '{{params.leading_zeros}}';
    var currentTimeString_id ;
    var currentDate_id ;
    var jstime_id = new Date().getTime()-1000;
    jstime_id=jstime_id+1000;
\tvar jsnow_id = new Date().getTime();
\tvar offset_id=jsnow_id-jstime_id;
\tif(offset_id>1000){
\tjstime_id=jstime_id+offset_id;
\tvar offsetseconds_id=Math.round(offset_id/1000);
\tcurrentTime_id.setSeconds(currentTime_id.getSeconds()+offsetseconds_id);
\t}
\tcurrentTime_id.setSeconds(currentTime_id.getSeconds()+1);
\tvar currentHours_id = currentTime_id.getHours();\t\t\t
\tvar currentMinutes_id = currentTime_id.getMinutes();
\tvar currentSeconds_id = currentTime_id.getSeconds();
\t// Handles 12h format
\tif(format_id==\"12h\"){ \t
\t//save a AM/PM variable
\tif(currentHours_id < 12 ){ 
\tvar ampm_id = \"AM\";
\t} else{
\tvar ampm_id = \"PM\";
\t}
\tif(currentHours_id>12){
\tcurrentHours_id=currentHours_id-12;
\t}
\t\t\t //convert 0 to 12
\tif(currentHours_id==0){
\tcurrentHours_id=12;
    }
\t}
\t\t// Pad the hours, minutes and seconds with leading zeros, if required
   if(leadingZeros_id==\"yes\"){
\tcurrentHours_id = ( currentHours_id < 10 ? \"0\" : \"\" ) + currentHours_id; 
    currentMinutes_id = ( currentMinutes_id < 10 ? \"0\" : \"\" ) + currentMinutes_id;
\tcurrentSeconds_id = ( currentSeconds_id < 10 ? \"0\" : \"\" ) + currentSeconds_id;
\t}

    if(leadingZeros_id==\"yes\" || leadingZeros_id==\"nothour\"){
    currentMinutes_id = ( currentMinutes_id < 10 ? \"0\" : \"\" ) + currentMinutes_id;
\tcurrentSeconds_id = ( currentSeconds_id < 10 ? \"0\" : \"\" ) + currentSeconds_id;
\t}
     
\t// Compose the string for display
\tcurrentTimeString_id = currentHours_id + \":\" + currentMinutes_id; 
\t// Add seconds if that has been selected
\tif(seconds_id==\"yes\"){
\tcurrentTimeString_id = currentTimeString_id + \":\" + currentSeconds_id;
\t}
\t\t// Add AM/PM if 12h format
\tif(format_id==\"12h\"){
\tcurrentTimeString_id = currentTimeString_id + \" \" + ampm_id;
\t}
\t\t
\t\t// Handle date formating
\tif(date_id != \"no\"){
\tvar date_new = currentTime_id.getDate(); 
\tvar month = currentTime_id.getMonth()+1;
\tvar year = currentTime_id.getFullYear();
\tvar day = currentTime_id.getDay();
\tvar textMonth = \"null\";
\tif(day==1){ day=\"Mon\";}
\tif(day==2){ day=\"Tue\";}
\tif(day==3){ day=\"Wed\";}
\tif(day==4){ day=\"Thu\";}
\tif(day==5){ day=\"Fri\";}
\tif(day==6){ day=\"Sat\";}
\tif(day==0){ day=\"Sun\";}
\tif(month==\"1\"){ textMonth=\"Jan\";}
\tif(month==\"2\"){ textMonth=\"Feb\";}
\tif(month==\"3\"){ textMonth=\"Mar\";}
\tif(month==\"4\"){ textMonth=\"Apr\";}
\tif(month==\"5\"){ textMonth=\"May\";}
\tif(month==\"6\"){ textMonth=\"Jun\";}
\tif(month==\"7\"){ textMonth=\"Jul\";}
\tif(month==\"8\"){ textMonth=\"Aug\";}
\tif(month==\"9\"){ textMonth=\"Sep\";}
\tif(month==\"10\"){ textMonth=\"Oct\";}
\tif(month==\"11\"){ textMonth=\"Nov\";}
\tif(month==\"12\"){ textMonth=\"Dec\";}
\tif(leadingZeros_id==\"yes\"){
\tif(month<10) month=\"0\" + month;
\tif(date_new<10) date_new=\"0\" + date_new;
\t}
\t//Compose date string
\tswitch (date_id){ 
\t\t\t\tcase \"format1\":
\t\t\t\t\tcurrentDate_id=year + \"-\" + month + \"-\" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format2\":
\t\t\t\t\tcurrentDate_id=year + \"/\" + month + \"/\" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format3\":
\t\t\t\t\tcurrentDate_id=date_new + \"/\" + month + \"/\" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format4\":
\t\t\t\t\tcurrentDate_id=month + \"/\" + date_new + \"/\" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format5\":
\t\t\t\t\tcurrentDate_id=date_new + \" \" + textMonth;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format6\":
\t\t\t\t\tcurrentDate_id=day + \" \" + date_new + \" \" +textMonth;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format7\":
\t\t\t\t\tcurrentDate_id=textMonth + \" \" + date_new;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format8\":
\t\t\t\t\tcurrentDate_id=textMonth + \" \" + date_new + \", \" + year;
\t\t\t\t\tbreak;
\t\t\t\tcase \"format9\":
\t\t\t\t\tcurrentDate_id=day + \" \" + textMonth + \" \" + date_new;
\t\t\t\t\tbreak;
                default :
                    currentDate_id=year + \"-\" + month + \"-\" + date_new;
\t\t\t\t
\t\t\t} 
\t\t}  
\t\tif(document.getElementById('dtWorldClocksTime_'+id)) { document.getElementById('dtWorldClocksTime_'+id).innerHTML = '<b>'+currentTimeString_id+'</b>'; }
        if(document.getElementById('dtWorldClocksCountry_'+id)) { document.getElementById('dtWorldClocksCountry_'+id).innerHTML = country_id; }
\t\tif(date_id!=\"no\"){ 
\t\t\tif(document.getElementById(\"dtWorldClocksDate_\"+id)) { document.getElementById(\"dtWorldClocksDate_\"+id).innerHTML = currentDate_id;}
\t\t}
\t}
\t
\t
</script>   
{% endif %}        
{% endfor %} 
 <script>
if('{{params.clock_1}}' == 'yes') setInterval(function(){dtclockUpdate_1(1);},1000); 
if('{{params.clock_2}}' == 'yes') setInterval(function(){dtclockUpdate_2(2);},1000);
if('{{params.clock_3}}' == 'yes') setInterval(function(){dtclockUpdate_3(3);},1000);
if('{{params.clock_4}}' == 'yes') setInterval(function(){dtclockUpdate_4(4);},1000);
</script>
</div>
{% endif %}
{% endfor %} 


", "/home/vagrant/Code/octobercms/plugins/deligencetechnologies/dtworldclock/components/dtworldclock/default.htm", "");
    }
}
