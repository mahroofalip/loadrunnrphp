<?php 
session_start();
include "conn.php";
 if(isset($_POST['add_blog']))
{
$blog_title = $_POST['blog_title'];
$blog_dis = $_POST['blog_dis'];
$posted      = date("j-F-Y");

if($_FILES['image']['name'])
{
$img_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$path = "../user-folder/";
$image = uniqid().$img_name;
move_uploaded_file($tmp_name,$path.$image);
}

$sql2 = $conn->prepare("INSERT INTO blog(blog_title, blog_dis, posted, image) VALUES('".$blog_title."', '".$blog_dis."', '".$posted."', '".$image."') ");
if($sql2->execute())
{
$_SESSION['msg1']="
    <h4><strong>Success!</strong>Add Blog Successfully.</h4>
";
header("location:add-blog.php?msg1=1");
}

}



 if(isset($_POST['add_course']))
{
$coursename = $_POST['coursename'];
$shortdescription = $_POST['shortdescription'];
$description = $_POST['display_home'];
if($_FILES['image']['name'])
{
$img_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$path = "../user-folder/";
$image = uniqid().$img_name;
move_uploaded_file($tmp_name,$path.$image);

}


$sql2 = $conn->prepare("INSERT INTO course(coursename,shortdescription, image, display_home) VALUES('".$coursename."','".$shortdescription."', '".$image."', '".$description."') ");
if($sql2->execute())
{
$_SESSION['msg1']="
    <h4><strong>Success!</strong>Add course Successfully.</h4>
";
header("location:add-course.php?msg1=1");
}

}

if(isset($_POST['add_sub_cat']))
{
$data = array(
'sub_cat' => $_POST['sub_cat'],
'cat' => $_POST['cat'],
'url' => $_POST['url'],
);
$data = array_map('trim',$data);
$array_keys = array_keys($data);
$array_values = array_values($data);
$keys = implode(",",$array_keys);
$values = implode("','",$array_values);
$sql = $conn->prepare("INSERT INTO subcat ($keys) values('$values')");
if($sql->execute())
{
$_SESSION['msg']="<h4>
    <strong>Success!</strong>Add SUb Category Successfully.</h4>
";

header("location:add-sub-category.php?msg=1");

}
}

if(isset($_POST['add_cashback_order']))
{
$username = $_POST['username'];
$order_date = $_POST['order_date'];
$store_name = $_POST['store_name'];
$cashback_point = $_POST['cashback_point'];
$transaction_id = $_POST['transaction_id'];
$product_detail = $_POST['product_detail'];
$ref_no = $_POST['ref_no'];
$hold_period = $_POST['hold_period'];
$notes = $_POST['notes'];
$posted      = date("j-F-Y");
$confirmation_date = Date('Y-m-d', strtotime("+".$hold_period." days"));

$sql2 = $conn->prepare("INSERT INTO cashback_order (username,order_date,store_name,cashback_point,transaction_id,product_detail,ref_no,hold_period,notes,posted,confirmation_date) VALUES('".$username."','".$order_date."','".$store_name."','".$cashback_point."','".$transaction_id."','".$product_detail."','".$ref_no."','".$hold_period."','".$notes."','".$posted."','".$confirmation_date."')");
if($sql2->execute())
{
$_SESSION['msg']="<h4><strong>Success!</strong>Add Cashback Order Successfully.</h4>";
header("location:add-cashback-order.php?msg=1");
}

}


if(isset($_POST['update_policy']))
{
$policy = $_POST['policy'];
$sql = $conn->prepare("UPDATE privacy_policy SET policy = ? WHERE id = '1'");
if($sql->execute([$policy]))
{
$_SESSION['msg']="
    <h4><strong>Success!</strong>Update Policy Successfully.</h4>
";
header("location:update-privacy-policy.php?msg=1");

}
}


if(isset($_POST['update_t_condition']))
{
$t_condition = $_POST['t_condition'];
$sql = $conn->prepare("UPDATE t_condition SET t_condition = ? WHERE id = '1'");
if($sql->execute([$t_condition]))
{
$_SESSION['msg']="
    <h4><strong>Success!</strong>Update Term & Condition Successfully.</h4>
";
header("location:update-term-condition.php?msg=1");

}
}

if(isset($_POST['update_anti_spam_policy']))
{
$anti_spam_policy = $_POST['anti_spam_policy'];
$sql = $conn->prepare("UPDATE anti_spam_policy SET anti_spam_policy = ? WHERE id = '1'");
if($sql->execute([$anti_spam_policy]))
{
$_SESSION['msg']="
    <h4><strong>Success!</strong>Update Anti Spam Policy Successfully.</h4>
";
header("location:update-anti-spam-policy.php?msg=1");

}
}


if(isset($_POST['update_about_us']))
{
$about_us = $_POST['about_us'];
$heading = $_POST['heading'];
$sql = $conn->prepare("UPDATE about_us SET about_us = ?, heading = ? WHERE id = '1'");
if($sql->execute([$about_us,$heading]))
{
$_SESSION['msg']="
    <h4><strong>Success!</strong>Update About Us Successfully.</h4>
";
header("location:update-about-us.php?msg=1");

}
}


if(isset($_POST['add_brand']))
{
$data = array(
'sub_cat' => $_POST['sub_cat'],
'cat' => $_POST['cat'],
'brand_name' => $_POST['brand_name'],
);
$data = array_map('trim',$data);
$array_keys = array_keys($data);
$array_values = array_values($data);
$keys = implode(",",$array_keys);
$values = implode("','",$array_values);
$sql = $conn->prepare("INSERT INTO brand ($keys) values('$values')");
if($sql->execute())
{
$_SESSION['msg']="<h4>
    <strong>Success!</strong>Add Brand Successfully.</h4>
";

header("location:add-brand.php?msg=1");

}
}

if(isset($_POST['add_prob_type']))
{
$data = array(
'prob_type' => $_POST['prob_type'],

);
$data = array_map('trim',$data);
$array_keys = array_keys($data);
$array_values = array_values($data);
$keys = implode(",",$array_keys);
$values = implode("','",$array_values);
$sql = $conn->prepare("INSERT INTO prob_type ($keys) values('$values')");
if($sql->execute())
{
$_SESSION['msg']="<h4>
    <strong>Success!</strong>Add Problem Type Successfully.</h4>
";

header("location:add-problem-type.php?msg=1");

}
}


if(isset($_POST['add_faq']))
{
$data = array(
'faq_cat' => $_POST['faq_cat'],
'faq' => $_POST['faq'],
'ans' => $_POST['ans'],
);
$data = array_map('trim',$data);
$array_keys = array_keys($data);
$array_values = array_values($data);
$keys = implode(",",$array_keys);
$values = implode("','",$array_values);
$sql = $conn->prepare("INSERT INTO faq ($keys) values('$values')");
if($sql->execute())
{
$_SESSION['msg']="<h4>
    <strong>Success!</strong>Add FAQ Successfully.</h4>
";

header("location:add-faq.php?msg=1");

}
}

if(isset($_POST['add_coupon']))
{
$data = array(
'store_name' => $_POST['store_name'],
'url' => $_POST['url'],
'offer' => $_POST['offer'],
'description' => $_POST['description'],
'category' => $_POST['category'],
);
$data = array_map('trim',$data);
$array_keys = array_keys($data);
$array_values = array_values($data);
$keys = implode(",",$array_keys);
$values = implode("','",$array_values);
$sql = $conn->prepare("INSERT INTO coupon ($keys) values('$values')");
if($sql->execute())
{
$_SESSION['msg']="<h4>
    <strong>Success!</strong>Add Coupon Successfully.</h4>
";

header("location:add-coupon.php?msg=1");

}
}


 if(isset($_POST['add_product']))
{
$product_name = $_POST['product_name'];
$store_name = $_POST['store_name'];
$brand_name = $_POST['brand_name'];
$s_description = $_POST['s_description'];
$f_description = $_POST['f_description'];
$price = $_POST['price'];
$mprice = $_POST['mprice'];
$discount = $_POST['discount'];
$product_star = $_POST['product_star'];
$url = $_POST['url'];
$category = $_POST['category'];
$sub_category = $_POST['sub_category'];
$reward_point = $_POST['reward_point'];
$sku = $_POST['sku'];
$specification = $_POST['specification'];


if($_FILES['image']['name'])
{
$img_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$path = "../user-folder/";
$image = uniqid().$img_name;
move_uploaded_file($tmp_name,$path.$image);
}

$sql2 = $conn->prepare("INSERT INTO product(product_name, store_name, brand_name, image, s_description, f_description, price, mprice, discount, product_star, url, category, sub_category, reward_point, sku, specification) VALUES('".$product_name."', '".$store_name."', '".$brand_name."', '".$image."', '".$s_description."', '".$f_description."', '".$price."', '".$mprice."', '".$discount."', '".$product_star."', '".$url."', '".$category."', '".$sub_category."', '".$reward_point."', '".$sku."', '".$specification."') ");
if($sql2->execute())
{
$_SESSION['msg']="
    <h4><strong>Success!</strong>Add Product Successfully.</h4>
";
header("location:add-product.php?msg=1");
}

}



if(isset($_POST['import']))
{
    $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
        {

            $sql20 = $conn->prepare("INSERT into cashback_order (`username`,`order_date`,`store_name`,`cashback_point`,`transaction_id`,`product_detail`,`ref_no`,`hold_period`,`notes`,`status`)values('".$emapData[0]."','".$emapData[1]."','".$emapData[2]."','".$emapData[3]."','".$emapData[4]."','".$emapData[5]."','".$emapData[6]."','".$emapData[7]."','".$emapData[8]."','".$emapData[9]."')");
            if($sql20->execute())
            {
                $_SESSION['msg']="<h4><strong>Success!</strong>CSV File Upload Successfully.</h4>";
                header("location:add-cashback-order.php");
            }
        }
        fclose($file);

    }
}
?>