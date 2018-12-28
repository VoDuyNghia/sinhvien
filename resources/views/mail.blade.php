<style type="text/css">
      table,th,td{
          border:1px solid black;
          border-collapse: collapse;
      }
      table{
          width: 50%;
      }
      th.left{
          height:100px;
      }
      th.right{
      }
  </style>
<table style='width: 70%; margin-left: 14%;'>
      <tr>
            <td colspan="2" style='background: cadetblue;height: 105px;font-weight:bold;text-align: center'>
               <span style='font-size: 45px;font-weight: bold;'>XÁC NHẬN EMAIL </span>
            </td>
      </tr>
      <tr>
          <td style='font-weight:bold'>Email của bạn</td>
          <td style='text-align: center'>{{ $email }}</td>
      </tr>
      <tr>
          <td style='font-weight:bold'> Mã xác nhận</td>
          <td style='color:red;text-align: center;font-weight:bold'>{{ $code }}</td>
      </tr>
</table>