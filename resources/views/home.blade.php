@extends('layouts.app')

@section('title', 'الرئيسية - أكاديمية بارنيز')

@section('content')
<section id="home" class="bg-white py-20" style="background-image: url('/images/brn1.jpg'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4 text-center fade-in">
      <div class="bg-black bg-opacity-60 p-6 rounded-lg inline-block">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">مرحباً بكم في أكاديمية بارنيز</h2>
        <p class="text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto">انضم إلينا لتتعلم فن إعداد القهوة بأسلوب احترافي مع كورسات مصممة بعناية من قبل خبراء القهوة.</p>
        <a href="#courses" class="inline-block bg-[var(--dark-green)] text-white px-8 py-3 rounded-full hover:bg-[var(--light-green)] transition-colors text-lg">استعرض الكورسات</a>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="courses" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-[var(--dark-green)] mb-12 fade-in">الكورسات المتاحة</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Course 1 -->
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">أساسيات إعداد القهوة</h3>
          <p class="text-gray-600 mb-4">تعلم أساسيات تحضير القهوة المختصة بأسلوب احترافي مع خبراء الصناعة.</p>
          <div class="video-container mb-4">
            <video controls>
              <source src="video1.mp4" type="video/mp4">
              متصفحك لا يدعم تشغيل الفيديو.
            </video>
          </div>
          <a href="course1.pdf" target="_blank" class="text-[var(--dark-green)] hover:text-[var(--light-green)] transition-colors inline-block mb-4">
            <i class="fas fa-file-pdf mr-1"></i> تحميل ملف PDF
          </a>
          <button onclick="enrollCourse('أساسيات إعداد القهوة')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل في الكورس</button>
        </div>
        <!-- Course 2 -->
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.2s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">فن اللاتيه</h3>
          <p class="text-gray-600 mb-4">إتقان تقنيات رسم اللاتيه وتحضير مشروبات القهوة بالحليب بأسلوب فني.</p>
          <div class="video-container mb-4">
            <video controls>
              <source src="video2.mp4" type="video/mp4">
              متصفحك لا يدعم تشغيل الفيديو.
            </video>
          </div>
          <a href="course2.pdf" target="_blank" class="text-[var(--dark-green)] hover:text-[var(--light-green)] transition-colors inline-block mb-4">
            <i class="fas fa-file-pdf mr-1"></i> تحميل ملف PDF
          </a>
          <button onclick="enrollCourse('فن اللاتيه')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل في الكورس</button>
        </div>
        <!-- Course 3 -->
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.4s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">القهوة المختصة</h3>
          <p class="text-gray-600 mb-4">اكتشف أسرار تحميص وتحضير القهوة المختصة بأعلى معايير الجودة.</p>
          <div class="video-container mb-4">
            <video controls>
              <source src="video3.mp4" type="video/mp4">
              متصفحك لا يدعم تشغيل الفيديو.
            </video>
          </div>
          <a href="course3.pdf" target="_blank" class="text-[var(--dark-green)] hover:text-[var(--light-green)] transition-colors inline-block mb-4">
            <i class="fas fa-file-pdf mr-1"></i> تحميل ملف PDF
          </a>
          <button onclick="enrollCourse('القهوة المختصة')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل في الكورس</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Workshops Section -->
  <section id="workshops" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-[var(--dark-green)] mb-12 fade-in">ورش العمل التفاعلية</h2>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto fade-in">انضم إلى ورش العمل العملية لتتعلم تحضير القهوة باستخدام أحدث المعدات تحت إشراف خبراء القهوة.</p>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">تذوق القهوة</h3>
          <p class="text-gray-600 mb-4">تعلم كيفية تذوق وتقييم نكهات القهوة المختلفة في جلسة تفاعلية.</p>
          <button onclick="enrollCourse('تذوق القهوة')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل</button>
        </div>
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.2s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">تحضير الإسبريسو</h3>
          <p class="text-gray-600 mb-4">أتقن استخدام آلات الإسبريسو لتحضير قهوة مثالية.</p>
          <button onclick="enrollCourse('تحضير الإسبريسو')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل</button>
        </div>
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.4s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">القهوة المقطرة</h3>
          <p class="text-gray-600 mb-4">اكتشف تقنيات تحضير القهوة المقطرة بأدوات مثل V60 وChemex.</p>
          <button onclick="enrollCourse('القهوة المقطرة')" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">التسجيل</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Sustainability Section -->
  <section id="sustainability" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-6">مصادر قهوتنا والاستدامة</h2>
      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">نحن في أكاديمية بارنيز نستخدم حبوب قهوة عالية الجودة من مزارع مستدامة، مع الالتزام بمعايير التجارة العادلة لدعم المزارعين والبيئة.</p>
    </div>
  </section>

  <!-- Certifications Section -->
  <section id="certifications" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-12 fade-in">شهاداتنا المعتمدة</h2>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto fade-in">احصل على شهادة معتمدة من أكاديمية بارنيز عند إكمالك لكورساتنا، معترف بها في صناعة القهوة.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">شهادة الباريستا المحترف</h3>
          <p class="text-gray-600 mb-4">معترف بها عالميًا، تؤهلك للعمل كباريستا محترف.</p>
        </div>
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.2s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">شهادة تحميص القهوة</h3>
          <p class="text-gray-600 mb-4">تعلم فنون التحميص وتحليل جودة الحبوب.</p>
        </div>
        <div class="course-card bg-white rounded-xl shadow-md p-6 fade-in" style="animation-delay: 0.4s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)] mb-3">شهادة تذوق القهوة</h3>
          <p class="text-gray-600 mb-4">تطوير مهارات تذوق وتقييم القهوة المختصة.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-12 fade-in">قصص نجاح طلابنا</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-100 p-6 rounded-xl fade-in" style="animation-delay: 0s;">
          <p class="text-gray-600 mb-4">"كورس فن اللاتيه غيّر مسيرتي المهنية، والآن أعمل كباريستا محترف!"</p>
          <p class="font-bold text-[var(--dark-green)]">أحمد، خريج 2024</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-xl fade-in" style="animation-delay: 0.2s;">
          <p class="text-gray-600 mb-4">"ورشة تذوق القهوة ساعدتني على فهم النكهات بشكل أعمق."</p>
          <p class="font-bold text-[var(--dark-green)]">سارة، خريجة 2023</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-xl fade-in" style="animation-delay: 0.4s;">
          <p class="text-gray-600 mb-4">"الشهادة المعتمدة فتحت لي أبوابًا في صناعة القهوة."</p>
          <p class="font-bold text-[var(--dark-green)]">محمد، خريج 2024</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-12 fade-in">الأسئلة الشائعة</h2>
      <div class="space-y-4 max-w-3xl mx-auto">
        <div class="fade-in" style="animation-delay: 0s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)]">ما هي مدة الكورسات؟</h3>
          <p class="text-gray-600">تتراوح مدة الكورسات بين أسبوعين إلى شهر، حسب نوع الكورس.</p>
        </div>
        <div class="fade-in" style="animation-delay: 0.2s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)]">هل الشهادات معتمدة؟</h3>
          <p class="text-gray-600">نعم، جميع شهاداتنا معتمدة ومعترف بها في صناعة القهوة.</p>
        </div>
        <div class="fade-in" style="animation-delay: 0.4s;">
          <h3 class="text-xl font-bold text-[var(--dark-green)]">هل هناك كورسات عبر الإنترنت؟</h3>
          <p class="text-gray-600">نقدم كورسات حضورية وعبر الإنترنت لتناسب احتياجات الجميع.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Resources Section -->
  <section id="resources" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-12 fade-in">موارد تعليمية مجانية</h2>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto fade-in">استمتع بمقالات وفيديوهات تعليمية مجانية لتحسين مهاراتك في تحضير القهوة.</p>
      <a href="resources.pdf" class="text-[var(--dark-green)] hover:text-[var(--light-green)] transition-colors fade-in">
        <i class="fas fa-file-pdf mr-1"></i> تحميل دليل القهوة المجاني
      </a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="bg-white py-20">
    <div class="container mx-auto px-4 text-center fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-6">عن أكاديمية بارنيز</h2>
      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">أكاديمية بارنيز هي وجهتك لتعلم فنون القهوة من خلال كورسات احترافية تجمع بين النظري والعملي، مقدمة من خبراء في المجال لتمكينك من إتقان تحضير القهوة بكل ثقة.</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-gray-100 py-20">
    <div class="container mx-auto px-4 text-center fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--dark-green)] mb-6">تواصل معنا</h2>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">للاستفسارات، يرجى التواصل معنا عبر النموذج أو البريد الإلكتروني أو الهاتف.</p>
      <div class="flex flex-col items-center space-y-4 mb-8">
        <p class="text-gray-700 fade-in">
          <i class="fas fa-envelope mr-2"></i> البريد الإلكتروني:
          <a href="mailto:info@barniesacademy.com" class="hover:text-[var(--light-green)] transition-colors">info@barniesacademy.com</a>
        </p>
        <p class="text-gray-700 fade-in">
          <i class="fas fa-phone mr-2"></i> الهاتف:
          <a href="tel:+1234567890" class="hover:text-[var(--light-green)] transition-colors">+123-456-7890</a>
        </p>
      </div>
      <!-- Contact Form -->
      <div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow-md fade-in">
        <h3 class="text-xl font-bold text-[var(--dark-green)] mb-4">نموذج التواصل</h3>
        <form id="contact-form">
          <div class="mb-4">
            <input type="text" id="name" placeholder="الاسم" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--light-green)]" required>
          </div>
          <div class="mb-4">
            <input type="email" id="email" placeholder="البريد الإلكتروني" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--light-green)]" required>
          </div>
          <div class="mb-4">
            <textarea id="message" placeholder="رسالتك" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--light-green)]" rows="4" required></textarea>
          </div>
          <button type="button" onclick="submitContactForm()" class="w-full bg-[var(--dark-green)] text-white px-4 py-2 rounded-full hover:bg-[var(--light-green)] transition-colors">إرسال</button>
        </form>
      </div>
      <!-- Excel Upload -->
      <div class="max-w-lg mx-auto mt-8 bg-white p-6 rounded-xl shadow-md fade-in">
        <h3 class="text-xl font-bold text-[var(--dark-green)] mb-4">رفع ملف Excel</h3>
        <input type="file" id="excel-upload" accept=".xlsx,.xls" class="mb-4">
        <div id="loader" class="loader"></div>
        <p id="upload-status" class="text-gray-600 mt-2"></p>
      </div>
    </div>
  </section>


@endsection
