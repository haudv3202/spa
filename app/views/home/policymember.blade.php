@extends('layout.index')
@section('TitlePage')
  Liên hệ với chúng tôi
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <div class="box-policy-and-privacy">

    <div class="container ">
      <div class="policy-and-privacy">
        <div class="title-policy">
          <h3 class="text-center">CHÍNH SÁCH KHÁCH HÀNG THÂN THIẾT </h3>
          <p class="my-3">BOVIS SPA với mong muốn đem lại nhiều quyền lợi thiết thực dành riêng cho khách hàng khi sử dụng dịch vụ, Spa hân hạnh giới thiệu chính sách về chương trình "Khách hàng thân thiết". Cụ thể:</p>
        </div>
        <div class="img-policy text-center">
          <img class="w-100" src="https://tiktik.cloud/pictures/getfile/Khach-hang-than-thiet-la-gi.png" alt="">
        </div>
        <div class="box-text-policy">
          <div class="text-box-policy">
            <h3>1.Các loại thẻ </h3>
            <p>Là khách hàng thân thiết tại BOVIS SPA, quý khách sẽ nhận được chiết khấu đặc quyền. Hiện tại, chương trình "Khách hàng thân thiết" bao gồm 3 hạng thẻ, trong đó:</p>
            <ul>
              <li class="li">Thẻ khách hàng thân thiết hạng Bạc: Tổng chi tiêu tích lũy của khách hàng đạt từ 10 triệu đồng</li>
              <li class="li">Giao hàng</li>
              <li class="li">Thẻ khách hàng thân thiết hạng Vàng: Tổng chi tiêu tích lũy của khách hàng đạt từ 15 triệu đồng </li>
              <li class="li">Thẻ khách hàng thân thiết hạng Kim cương: Tổng chi tiêu tích lũy của khách hàng đạt từ 30 triệu đồng </li>
            </ul>
          </div>
          <div class="text-box-policy">
            <h3>2. Điều kiện để được cấp thẻ thành viên</h3>
            <p>Khi khách hàng sử dụng dịch vụ làm đẹp tại BOVIS SPA ở bất kỳ cơ sở nào, lịch sử tiêu dùng và thông tin của khách hàng sẽ được lưu trữ và làm cơ sở để cấp thẻ thành viên, dựa trên tiêu chí:</p>
            <ul>
              <li class="li">Khách hàng sẽ được cấp thẻ thành viên khi đạt tổng chi tiêu tích lũy dựa trên quy định tại Spa.</li>
            </ul>
            <p> <strong>Lưu ý:</strong> Khách hàng có thể theo dõi thứ hạng thành viên của mình khi đăng ký thành viên tại website BOVIS SPA theo địa chỉ:
              <a href="https://bovisspa.com/">https://bovisspa.com/</a> </p>
          </div>
          <div class="text-box-policy">
            <h3>3. Quy định khi sử dụng thẻ</h3>
            <ul>
              <li class="li">Khi sử dụng, Quý khách vui lòng mang theo thẻ thành viên để được hưởng ưu đãi.</li>
              <li class="li">Trường hợp không mang theo thẻ thành viên, quý khách vui lòng đọc số điện thoại của mình để nhân viên xác nhận và giúp quý khách hưởng trọn các ưu đãi.</li>
              <li class="li">Trường hợp bị mất thẻ, đề nghị quý khách báo cho phòng Chăm Sóc Khách Hàng của BOVIS SPA theo địa chỉ email:
                <a href="monobovis@gmail.com">monobovis@gmail.com</a>
                kèm các thông tin: họ và tên, số điện thoại để đăng ký cấp thẻ mới (phụ thu phí làm thẻ 50.000 VNĐ), thẻ bị mất sẽ được vô hiệu hóa để bảo mật.</li>
              <li class="li">Thời hạn sử dụng thẻ: 6 tháng (khách hàng sẽ phải chi trả một mức phí cố định theo quy định của BOVIS SPA để gia hạn thời gian sử dụng thẻ).</li>
            </ul>
          </div>
          <div class="text-box-policy">
            <h3>4. ƯU ĐÃI ĐẶC QUYỀN DÀNH CHO THÀNH VIÊN</h3>
           <table class="table table-striped">
             <thead>
             <tr>
               <th>STT</th>
               <th>Đặc quyền VIP</th>
               <th>Thẻ TV hạng Bạc </th>
               <th>Thẻ thành viên hạng Vàng</th>
               <th>Thẻ TV hạng Kim cương</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <th scope="row">1</th>
               <td>Ưu đãi giảm giá</td>
               <td>5%</td>
               <td>10%</td>
               <td>15%</td>
             </tr>
             <tr>
               <th scope="row">2</th>
               <td>Quà sinh nhật </td>
               <td>Quà tặng giá trị và phiếu ưu đãi chăm sóc da  </td>
               <td>Quà tặng giá trị và phiếu ưu đãi chăm sóc da</td>
               <td>Quà tặng giá trị và phiếu ưu đãi chăm sóc da</td>
             </tr>
             <tr>
               <th scope="row">3</th>
               <td>Quà tri ân cuối năm</td>
               <td></td>
               <td>Quà hiện vật trị giá cao tại Spa</td>
               <td>Quà hiện vật trị giá cao tại Spa </td>
             </tr>
             </tbody>
           </table>
            <h4>Lưu ý: </h4>
            <ul>
              <li class="li">Ưu đãi thành viên chỉ áp dụng cho chính chủ thẻ và không có chức năng sang tên hoặc chuyển nhượng cho người khác.</li>
              <li class="li">Ưu đãi thẻ thành viên <strong>KHÔNG ÁP DỤNG  ĐỒNG THỜI</strong> với các chương trình khuyến mãi, ưu đãi khác.</li>
              <li class="li">Các ưu đãi, quà tặng dành cho thẻ thành viên BOVIS SPA không có giá trị quy đổi thành tiền mặt.</li>
              <li class="li">Khi sử dụng các sản phẩm, dịch vụ tại BOVIS SPA, quý khách cần xuất trình thẻ thành viên để được hưởng ưu đãi.</li>
              <li class="li">Không áp dụng chính sách khách hàng thân thiết trong các trường hợp sau:
                <ul>
                  <li class="li">Khách hàng không cung cấp được hoặc cung cấp không đúng các thông tin theo quy định.</li>
                  <li class="li">Các chương trình khuyến mãi, ưu đãi giảm giá có điều kiện không áp dụng cho Khách hàng thành viên.</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="text-box-policy">
            <h3>5. ƯU ĐÃI ĐẶC QUYỀN DÀNH CHO THÀNH VIÊN</h3>
            <strong>Khách hàng đạt thành viên hạng Bạc:</strong>
            <ul>
              <li class="li">Tặng 3 phiếu chăm sóc da mặt có trị giá 500.000 đồng/ phiếu.</li>
              <li class="li">Thăm khám với Bác sĩ một lần</li>
            </ul>
            <strong>Khách hàng đạt thành viên hạng Vàng:</strong>
            <ul>
              <li class="li">Tặng Meso căng bóng trị giá 2.500.000 đồng.</li>
              <li class="li">Tặng kèm gội dưỡng sinh 5 buổi.</li>
              <li class="li">Thăm khám với Bác sĩ một lần.</li>
            </ul>
            <strong>Khách hàng đạt thành viên hạng Kim cương:</strong>
            <ul>
              <li class="li">Thực hiện phương pháp thẩm mỹ không phẫu thuật một vùng bất kỳ như mí, mũi, hàm, tan mỡ. Hoặc 1 buổi Carbon laser trắng sáng 2.500.000 đồng.</li>
              <li class="li">Tặng kèm gội dưỡng sinh 5 buổi.</li>
              <li class="li">Thăm khám với Bác sĩ một lần.</li>
            </ul>
          </div>
          <div class="text-box-policy">
            <h3>6. Quy định khác</h3>
            <ul>
              <li class="li">Đối với các trường hợp bất khả kháng như: cháy, nổ, thiên tai, dịch bệnh,…dẫn đến các điều kiện không đảm bảo, BOVIS SPA có quyền ngừng cung cấp các ưu đãi theo quy định.</li>
              <li class="li">Tất cả quyền lợi, ưu đãi, thể lệ tham gia Chương trình khách hàng thân thiết có thể thay đổi theo từng thời điểm.</li>
              <li class="li">Khi cần tra cứu chi tiêu tích lũy, Quý khách có thể đến truy cập địa chỉ website <a
                  href="https://bovisspa.com/">https://bovisspa.com/</a> hoặc liên hệ phòng chăm sóc khách hàng qua địa chỉ email:
                <a href="monobovis@gmail.com">monobovis@gmail.com</a>  để được hướng dẫn.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    @include("components.contactmember")
    @include("components.socialcontact")
  </div>
@endsection
@push("mockup")
  @include('components.popup')

  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Thông báo!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('') }}';
      },1500)
    </script>
  @endif
@endpush
