<?

 if(isset($identy)):
?>

<div id="user-form">
    Hello, <?=$identy->username."   ".CHtml::button("Logout",["id"=>"button-logout"]);?>
    <?php if(isset($cabinet)):?>

            <table class="user-cabinet-table">
                <thead>
                 <tr>
                    <td>№</td><td>Subject</td><td>Mark</td>
                 </tr>
                </thead>
                <tbody>
        <?php $c = 1; foreach($cabinet as $cab):?>
                <tr>
                    <td><?=$c;?></td><td><?=$cab->subject?></td><td><?=$cab->mark?></td>
                </tr>
        <?php $c++; endforeach;?>
                </tbody>
            </table>

    <?php endif;?>
</div>
<script>
 $("#button-logout").click(function(){
     window.location.href = "/logout";
 });
</script>
<?endif;?>