<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Yêu cầu tư vấn mới</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
  <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #2563eb;">Yêu cầu tư vấn mới từ website</h2>

    <div style="background: #f8fafc; padding: 20px; border-radius: 8px; margin: 20px 0;">
      <h3>Thông tin khách hàng:</h3>
      <p><strong>Họ và tên:</strong> {{ $data['name'] }}</p>
      <p><strong>Email:</strong> {{ $data['email'] }}</p>
      <p><strong>Số điện thoại:</strong> {{ $data['phone'] }}</p>
      @if ($data['service'])
        <p><strong>Dịch vụ quan tâm:</strong> {{ $data['service'] }}</p>
      @endif
    </div>

    @if ($data['message'])
      <div style="background: #fff; padding: 20px; border-left: 4px solid #2563eb; margin: 20px 0;">
        <h3>Nội dung tin nhắn:</h3>
        <p>{{ $data['message'] }}</p>
      </div>
    @endif

    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb;">
      <p style="color: #6b7280; font-size: 14px;">
        Email này được gửi từ form liên hệ trên website Tầm nhìn Thế giới.<br>
        Thời gian: {{ now()->format('d/m/Y H:i:s') }}
      </p>
    </div>
  </div>
</body>

</html>
