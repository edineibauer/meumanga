<i class='material-icons font-large left' style='color:goldenrod'>star</i>
<i class='material-icons font-large left' {if $nivel < 3}style='color:goldenrod'{/if}>star</i>
<i class='material-icons left font-large padding-right' {if $nivel < 2}style='color:goldenrod'{/if}>star</i>
<span class='left hide nivelName'>
    {($nivel == 3)? "Noob" : ($nivel == 2)? "Aprêndiz" : "Mestre"}
</span>