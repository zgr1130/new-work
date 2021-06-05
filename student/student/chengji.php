<h1>学生成绩表</h1>
<?php
include_once ("conn.php");
$result = mysqli_query($res,"SELECT x.id,x.name,k.kname,c.fenshu FROM xuesheng x INNER JOIN chengji c on (x.id=c.id) INNER JOIN kecheng k on (k.classid=c.classid) WHERE x.id=c.id and x.id=1");
echo "<table>";
echo "<tr><th>序号</th><th>姓名</th><th>语文</th><th>数学</th><th>英语</th><th>政治</th><th>历史</th><th>语文</th><th>生物</th><th>地理</th></tr>";
$row=mysqli_fetch_assoc($result);
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
while ($row=mysqli_fetch_assoc($result)){
    echo "<td>".$row['fenshu']."</td>";
}
echo "</table>";