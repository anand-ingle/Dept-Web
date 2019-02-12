<?php
require('fpdf/fpdf.php');


$msg="";
require 'database.php';
$getid=$_GET['courseid'];
$query=mysqli_query($database,"select * from itcourse where courseid='$getid'") ;
while($row=mysqli_fetch_array($query)){
$lect=$row['lectures'];
$obj=$row['courseobj'];
$desc=$row['coursedesc'];    
$prereq=$row['prerequ'];
$outcome=$row['courseoutcome'];
$coursecode=$row['courseid'];
$coursename=$row['coursename'];
$credits=$row['totalcredit'];
$contacthr=$row['contacthr'];
$test1=$row['testmark1'];
$test2=$row['testmark2'];
$teacherassess=$row['teacherassess'];
$endexam=$row['endexam'];
$unit1=$row['unit1'];
$unit2=$row['unit2'];
$unit3=$row['unit3'];
$unit4=$row['unit4'];
$unit5=$row['unit5'];
$text=$row['textbook'];
$ref=$row['ref-book'];
    
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 0);
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,10,"$coursecode $coursename",'0','0','C');
$pdf->SetFont('Times','B',12);
$pdf->SetXY(10,25);
$pdf->Cell(90,30,"",1,1);
$pdf->SetXY(100,25);
$pdf->Cell(94,30,"",1,1);
$pdf->SetXY(12,20);
$pdf->Cell(20,20,"Teaching Scheme");
$pdf->SetXY(12,25);
$pdf->Cell(20,20,"Lectures :$lect Hrs/Week");
$pdf->SetXY(12,30);
$pdf->Cell(20,20,"Credits :$credits");
$pdf->SetXY(100,19);
$pdf->Cell(20,20,"Examination Scheme");
$pdf->SetXY(100,25);
$pdf->Cell(20,20,"Test I :$test1 Marks");
$pdf->SetXY(100,30);
$pdf->Cell(20,20,"Test II :$test2 Marks");
$pdf->SetXY(100,35);
$pdf->Cell(20,20,"Teachers Assessment :$teacherassess Marks");
$pdf->SetXY(100,40);
$pdf->Cell(20,20,"End Semester Examination :$endexam Marks");
$pdf->SetXY(12,50);
$pdf->Cell(20,20,"Contact Hour For This Subject :");
$pdf->SetXY(12,60);
$pdf->Cell(20,20,"Prerquisites :$prereq");   
$pdf->SetXY(12,75);
$pdf->Cell(188,6,"Course Description :");
$pdf->SetXY(12,81);
$pdf->SetFont('Times');
$pdf->MultiCell(188,6,"$desc");
    
$pdf->SetFont('Times','B',12);      
$pdf->SetXY(12,110);
$pdf->Cell(188,6,"Course Objective :");
$pdf->SetXY(12,116);
$pdf->SetFont('Times');
$pdf->MultiCell(188,6,"$obj");
 $pdf->SetFont('Times','B',12);   
$pdf->SetXY(12,140);
$pdf->Cell(188,6,"Course Outcome :");
$pdf->SetXY(12,146);
$pdf->SetFont('Times');
$pdf->MultiCell(188,6,"$outcome",1,'L');  
$pdf->SetFont('Times','B',12);
    
$pdf->SetXY(12,175);
$pdf->Cell(188,7,"Detailed Syllabus :");  
$pdf->SetXY(10,182);
$pdf->Cell(30,35,"",1,1);
$pdf->SetXY(10,182);
$pdf->Cell(190,35,"",1,1);
$pdf->SetXY(12,195);
$pdf->Cell(20,20,"Unit 1");
$pdf->SetXY(40,183);
$pdf->SetFont('Times');

$pdf->MultiCell(158,6,"$unit1");  
$pdf->SetFont('Times','B',12);
$pdf->SetXY(10,217);
$pdf->Cell(30,35,"",1,1);
$pdf->SetXY(10,217);   
$pdf->Cell(190,35,"",1,1); 
$pdf->SetXY(12,230);
$pdf->Cell(20,20,"Unit 2");
$pdf->SetXY(40,219);    
$pdf->SetFont('Times');
$pdf->MultiCell(158,6,"$unit2");  
$pdf->SetFont('Times','B',12);
 
$pdf->SetXY(10,252);
$pdf->Cell(30,35,"",1,1);
$pdf->SetXY(10,252);   
$pdf->Cell(190,35,"",1,1); 
$pdf->SetXY(12,270);
$pdf->Cell(20,20,"Unit 3");  
$pdf->SetXY(40,253);    
$pdf->SetFont('Times');
$pdf->MultiCell(158,6,"$unit3");  
$pdf->SetFont('Times','B',12);   
    
$pdf->SetXY(10,300);
$pdf->Cell(30,45,"",1,1);
$pdf->SetXY(10,10);   
$pdf->Cell(190,45,"",1,1); 
$pdf->SetXY(12,20);
$pdf->Cell(20,20,"Unit 4");  
$pdf->SetXY(40,11);    
$pdf->SetFont('Times');
$pdf->MultiCell(158,6,"$unit4");  
$pdf->SetFont('Times','B',12);
    
$pdf->SetXY(10,55);
$pdf->Cell(30,45,"",1,1);
$pdf->SetXY(10,55);   
$pdf->Cell(190,45,"",1,1); 
$pdf->SetXY(12,65);
$pdf->Cell(20,20,"Unit 5"); 
    $pdf->SetXY(40,56);    
$pdf->SetFont('Times');
$pdf->MultiCell(158,6,"$unit5");  
$pdf->SetFont('Times','B',12);

$pdf->SetXY(12,105);
$pdf->Cell(188,6,"Text Books");
        $pdf->SetXY(12,112);    
$pdf->SetFont('Times');
$pdf->MultiCell(188,6,"$text");
$pdf->SetFont('Times','B',12);
$pdf->SetXY(12,150);
$pdf->Cell(188,6,"Reference Books");    
        $pdf->SetXY(12,156);    
$pdf->SetFont('Times');
$pdf->MultiCell(188,6,"$ref");
       
}
$pdf->Output();
?>