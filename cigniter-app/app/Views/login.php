<?php
helper('form');
echo form_open('/login');
#text control
$data1 = ['name'          => 'user',
        'id'            => 'text1',
        'value'         => "",
        'maxlength'     => '100',
        'size'          => '20',
       ];
$data2 = ['name'          => 'pass',
        'id'            => 'text2',
        'value'         => "",
        'maxlength'     => '100',
        'size'          => '20',
       ];
$check=['name'          => 'rememberme',
          'id'            => 'bla',
          'value'         => 'remember',   
];
?>    
<table>
    <tr>
        <td> <?php echo form_label('Username ', 'text1');?></td>
        <td><?php echo form_input($data1);?></td>
    <tr>
    <tr>
        <td><?php echo form_label('Password ', 'text2');?></td>
        <td><?php echo form_input($data2);?></td>
    </tr>
    <tr>
        <td ><?php echo form_label('Remember me ', 'rememeberme');
                        echo form_checkbox($check);?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('submit', 'Login');?></td>
    </tr>
<?php
echo form_close();
?>