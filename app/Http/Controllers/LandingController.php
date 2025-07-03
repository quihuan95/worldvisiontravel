<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class LandingController extends Controller
{
  public function index()
  {
    $data = [
      'slidess' => [
        [
          "video" => 'https://drive.google.com/file/d/1l1Rsa6JLf6Itbmdd0H8TLoMYKsfyI8KH/preview',
          "caption" => 'Sự kiện 1',
          "description" => 'Mô tả sự kiện 1'
        ],
        [
          "video" => 'https://drive.google.com/file/d/12yvipz-XpvYewHgQOpLup_mx3Vv6K7uk/preview',
          "caption" => 'Sự kiện 2',
          "description" => 'Mô tả sự kiện 2'
        ],
        [
          "video" => 'https://drive.google.com/file/d/1eKYe-WiKOXDhZOZtonG6YpM99tysIFFl/preview',
          "caption" => 'Sự kiện 3',
          "description" => 'Mô tả sự kiện 3'
        ],
        [
          "video" => 'https://drive.google.com/file/d/1BKkHI5WyOQiBF8tz9kYyMuZKVOnP0s17/preview',
          "caption" => 'Sự kiện 4',
          "description" => 'Mô tả sự kiện 4'
        ],
        [
          "video" => 'https://drive.google.com/file/d/1MMkBJCbtJZucaVqD5SQz90eABDlo7tjU/preview',
          "caption" => 'Sự kiện 5',
          "description" => 'Mô tả sự kiện 5'
        ],
      ],
      'destinations' => [
        ['name' => 'Paris, Pháp', 'image' => 'https://placehold.co/400x300?text=Paris', 'tours' => '25 tours'],
        ['name' => 'Tokyo, Nhật Bản', 'image' => 'https://placehold.co/400x300?text=Tokyo', 'tours' => '18 tours'],
        ['name' => 'New York, Mỹ', 'image' => 'https://placehold.co/400x300?text=New+York', 'tours' => '22 tours'],
        ['name' => 'London, Anh', 'image' => 'https://placehold.co/400x300?text=London', 'tours' => '20 tours'],
        ['name' => 'Dubai, UAE', 'image' => 'https://placehold.co/400x300?text=Dubai', 'tours' => '15 tours'],
        ['name' => 'Singapore', 'image' => 'https://placehold.co/400x300?text=Singapore', 'tours' => '12 tours']
      ],
      'testimonials' => [
        [
          'name' => 'Nguyễn Văn An',
          'position' => 'Giám đốc ABC Corporation',
          'content' => 'Dịch vụ tuyệt vời! Công ty đã tổ chức thành công hội nghị quốc tế cho chúng tôi với hơn 300 đại biểu từ 15 quốc gia.',
          'rating' => 5,
          'image' => 'https://placehold.co/100x100?text=An'
        ],
        [
          'name' => 'Trần Thị Bình',
          'position' => 'Trưởng phòng Marketing XYZ',
          'content' => 'Tour du lịch Châu Âu được tổ chức rất chuyên nghiệp. Mọi chi tiết đều được chăm sóc tỉ mỉ.',
          'rating' => 5,
          'image' => 'https://placehold.co/100x100?text=Binh'
        ],
        [
          'name' => 'Lê Minh Cường',
          'position' => 'CEO Tech Startup',
          'content' => 'Sự kiện ra mắt sản phẩm của chúng tôi đã thành công ngoài mong đợi nhờ sự hỗ trợ của đội ngũ chuyên nghiệp.',
          'rating' => 5,
          'image' => 'https://placehold.co/100x100?text=Cuong'
        ]
      ]
    ];

    return view('pages.home', $data);
  }

  public function submitContact(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email',
      'phone' => 'required|string',
      'service' => 'nullable|string',
      'message' => 'nullable|string'
    ]);

    try {
      // Send email notification
      Mail::to('events.worldvision@gmail.com')->send(new ContactFormMail($validated));

      // Save to database if needed
      // Contact::create($validated);

      return response()->json([
        'success' => true,
        'message' => 'Yêu cầu đã được gửi thành công! Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'Có lỗi xảy ra. Vui lòng thử lại sau.'
      ], 500);
    }
  }

  public function subscribeNewsletter(Request $request)
  {
    $validated = $request->validate([
      'email' => 'required|email|unique:newsletter_subscriptions,email'
    ]);

    try {
      // Save newsletter subscription
      // NewsletterSubscription::create($validated);

      return response()->json([
        'success' => true,
        'message' => 'Đăng ký newsletter thành công!'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'Email này đã được đăng ký hoặc có lỗi xảy ra.'
      ], 500);
    }
  }

  public function getNews($slug)
  {
    $locale = app()->getLocale();
    $listNews = [
      "hanoi-halong-hanoi" => [
        "views" => "post1",
        "title" => [
          "vi" => "Hà Nội – Hạ Long – Hà Nội",
          "en" => "Hanoi – Halong – Hanoi"
        ],
        "content_view" => [
          "vi" => "pages.news.contents.vi.post1",
          "en" => "pages.news.contents.en.post1"
        ]
      ],
      "danang-sontra-hoian-banahills-nguhanhson-3n2d" => [
        "views" => "post2",
        "title" => [
          "vi" => "Đà Nẵng – Sơn Trà – Hội An – Bà Nà Hills – Ngũ Hành Sơn",
          "en" => "Danang – Son Tra – Hoi An – Bana Hills – Ngu Hanh Son"
        ],
        "content_view" => [
          "vi" => "pages.news.contents.vi.post2",
          "en" => "pages.news.contents.en.post2"
        ]
      ],
      "hanoi-hakhau-binhbien-kienthuy-mongtu-hanoi" => [
        "views" => "post3",
        "title" => [
          "vi" => "Hà Nội – Hà Khẩu – Bình Biên – Kiến Thụy – Mông Tự – Hà Nội",
          "en" => "Hanoi – Hekou – Binh Bien – Kien Thuy – Mong Tu – Hanoi"
        ],
        "content_view" => [
          "vi" => "pages.news.contents.vi.post3",
          "en" => "pages.news.contents.en.post3"
        ]
      ]
    ];

    if (array_key_exists($slug, $listNews)) {
      $title = $listNews[$slug]['title'][$locale] ?? $listNews[$slug]['title']['vi'];
      $contentView = $listNews[$slug]['content_view'][$locale] ?? $listNews[$slug]['content_view']['vi'];

      // Nếu không có view tiếng Anh thì luôn trả về view tiếng Việt
      if ($locale === 'en' && (empty($listNews[$slug]['content_view']['en']) || !isset($listNews[$slug]['content_view']['en']))) {
        $contentView = $listNews[$slug]['content_view']['vi'];
      }

      return view('pages.news.layout', [
        'title' => $title,
        'contentView' => $contentView,
        'listNews' => $listNews,
        'currentSlug' => $slug
      ]);
    } else {
      abort(404);
    }
  }


  public function getBlogs($slug)
  {
    $locale = app()->getLocale();
    $listNews = [
      "to-chuc-su-kien-chuyen-nghiep-a-z-cung-world-vision-events" => [
        "views" => "post1",
        "title" => [
          "vi" => "Tổ chức sự kiện chuyên nghiệp A-Z cùng World Vision Events",
          "en" => "Professional Event Organization A-Z with World Vision Events"
        ],
        "content_view" => [
          "vi" => "pages.blogs.contents.vi.post1",
          "en" => "pages.blogs.contents.en.post1"
        ]
      ],
      "du-lich-mice-la-gi-dich-vu-to-chuc-mice-tai-world-vision-events" => [
        "views" => "post2",
        "title" => [
          "vi" => "Du lịch MICE là gì? Dịch vụ tổ chức MICE tại World Vision Events",
          "en" => "What is MICE tourism? MICE service at World Vision Events"
        ],
        "content_view" => [
          "vi" => "pages.blogs.contents.vi.post2",
          "en" => "pages.blogs.contents.en.post2"
        ]
      ],
      "cam-nang-to-chuc-hoi-nghi-hoi-thao-quoc-te-tai-viet-nam" => [
        "views" => "post3",
        "title" => [
          "vi" => "Cẩm nang tổ chức hội nghị, hội thảo quốc tế tại Việt Nam",
          "en" => "Handbook for organizing international conferences and seminars in Vietnam"
        ],
        "content_view" => [
          "vi" => "pages.blogs.contents.vi.post3",
          "en" => "pages.blogs.contents.en.post3"
        ]
      ],
      "hoi-nghi-khoa-hoc-thuong-nien-apscvir-2025" => [
        "views" => "post4",
        "title" => [
          "vi" => "HỘI NGHỊ KHOA HỌC THƯỜNG NIÊN APSCVIR 2025",
          "en" => "APSCVIR 2025 Annual Scientific Conference"
        ],
        "content_view" => [
          "vi" => "pages.blogs.contents.vi.post4",
          "en" => "pages.blogs.contents.en.post4"
        ]
      ]
    ];

    if (array_key_exists($slug, $listNews)) {
      $title = $listNews[$slug]['title'][$locale] ?? $listNews[$slug]['title']['vi'];
      $contentView = $listNews[$slug]['content_view'][$locale] ?? $listNews[$slug]['content_view']['vi'];
      // Nếu không có view tiếng Anh thì luôn trả về view tiếng Việt
      if ($locale === 'en' && (empty($listNews[$slug]['content_view']['en']) || !isset($listNews[$slug]['content_view']['en']))) {
        $contentView = $listNews[$slug]['content_view']['vi'];
      }
      return view('pages.blogs.layout', [
        'title' => $title,
        'contentView' => $contentView,
        'listNews' => $listNews,
        'currentSlug' => $slug
      ]);
    } else {
      abort(404);
    }
  }
}
