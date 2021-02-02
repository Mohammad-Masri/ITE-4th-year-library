<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        control panel
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class=" has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>الاستعارة</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="{{route('borrow.create')}}">تسجيل استعارة جديدة</a>
                        </li>
                        <li>
                            <a href="{{route('borrow.index')}}">إدارة الاستعارات</a>
                        </li>

                    </ul>
                </li>

                <li class=" has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>المستخدمون</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('user.create')}}">إضافة مستخدم جديد</a>
                        </li>
                        <li>
                            <a href="{{route('user.index')}}">إدارة المستخدمين</a>
                        </li>

                    </ul>
                </li>

                <li class=" has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>عناصر المكتبة</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('item.create')}}">إضافة عنصر جديد</a>
                        </li>
                        <li>
                            <a href="{{route('item.index')}}">إدارة العناص</a>
                        </li>
                        <li>
                            <a href="{{route('item_type.create')}}">إضافة نوع عنصر جديد</a>
                        </li>
                        <li>
                            <a href="{{route('item_type.index')}}">إدارة أنواع العناصر</a>
                        </li>

                    </ul>
                </li>

                <li class=" has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>الأشخاص</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('maintainer.create')}}">إضافة دكتور مشرف جديد</a>
                        </li>
                        <li>
                            <a href="{{route('maintainer.index')}}">إدارة الدكاترة المشرفين</a>
                        </li>
                        <li>
                            <a href="{{route('author.create')}}">إضافة مؤلف جديد</a>
                        </li>
                        <li>
                            <a href="{{route('author.index')}}">إدارة المؤلفون</a>
                        </li>
                    </ul>
                </li>

                <li class=" has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>المواد</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('subject.create')}}">إضافة مادة جديدة</a>
                        </li>
                        <li>
                            <a href="{{route('subject.index')}}">إدارة المواد</a>
                        </li>
                        <li>
                            <a href="{{route('academic_year.index')}}">إدارة السنوات الدراسية</a>
                        </li>
                        <li>
                            <a href="{{route('specialize.index')}}">إدارة الاختصاصات</a>
                        </li>
                    </ul>
                </li>



            </ul>

        </nav>
    </div>
</aside>
