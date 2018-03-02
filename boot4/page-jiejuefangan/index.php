<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark">
        <a href="" class="navbar-brand"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynav">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link active">主页</a></li>
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">产品</a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">产品1</a>
                <a href="" class="dropdown-item">产品2</a>
                <a href="" class="dropdown-item">产品3</a>
              </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link">关于</a></li>
          </ul>
          <!-- 如何让这个form移到右侧？ -->
          <form action="" class="form-inline">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>

    <div class="br-100"></div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
      <h1>为制造业量身定制</h1>
      <p>中国的工业运营和生产企业面临着来自劳动力管理越来越多的挑战。
      企业需要提高劳动力生产效率，符合劳动力法规要求，并降低劳动力管理成本，
      以便在当今竞争激烈的全球市场上取得成功。
      华一制造业劳动力管理解决方案能帮助企业应对这些挑战，
      并改善劳动力管理绩效。</p>
      </div>
    </div>

    <div class="container">
      <ul class="nav nav-tabs my-3">
        <li class="nav-item"><a href="#gaishu" class="nav-link active" data-toggle="tab">制造业</a></li>
        <li class="nav-item"><a href="#product" class="nav-link" data-toggle="tab">集团</a></li>
        <li class="nav-item"><a href="#about" class="nav-link" data-toggle="tab">零售服务业</a></li>
        <li class="nav-item"><a href="#test" class="nav-link" data-toggle="tab">科技金融业</a></li>
      </ul>
    </div>

    <div class="tab-content">
      <div class="tab-pane container active" id="gaishu">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-5"><img src="zhizao.png" alt=""></div>
          <div class="col-sm-12 col-md-7">
            <h3 class="text-primary">制造业</h3>
            <p>中国的工业运营和生产企业面临着来自劳动力管理越来越多的挑战。 企业需要提高劳动力生产效率，符合劳动力法规要求，并降低劳动力管理成本， 以便在当今竞争激烈的全球市场上取得成功。 盖雅制造业劳动力管理解决方案能帮助企业应对这些挑战， 并改善劳动力管理绩效。</p>
          </div>
        </div>

        <div class="solution container">
          <h3 class="text-primary">解决方案</h3>
          <h4 class="text-primary">使用华一软件进行灵活排班
            <!-- <a href="" class="btn btn-primary" data-toggle="collapse" data-target="#paiban">查看详情</a> -->
          </h4>
          <!-- <strong>使用华一软件进行灵活排班</strong> -->
          <div id="paiban">
            <h5>典型管理需求</h5>
            <p>生产车间的传统考勤管理方式比较繁琐。首先，车间需要提前对产线工人手工排班。排班时，既要统一规划安排不同工组的班次，
            又要根据节假日和生产计划调整部分工组、部分工人的班次，排班表制作非常繁琐复杂。月末，需要对比工人的排班数据，统计工人有效工作时长、加班时长，进而计算工人工资，数据处理量巨大且容易出错。</p>

            <h5>解决方案</h5>
            <p>使用华一软件对工组进行排班。按照车间所需不同的上班、下班、加班规则，创建不同的班次，例如白班、夜班、休班。将不同
              的工组设置为不同的考勤组，对考勤组全体成员统一按周进行“组循环”排班，例如周一到周五为白班、周六到周日为休班。若
              需要调整考勤组在排班月某些日期的班次，只需在“组循环”排班的基础上，对考勤组统一使用“组个性化”排班调整一次即可。若
              需要单独调整某工人在排班月某些日期的班次，只需在“组循环”排班、“组个性化”排班的基础上，对该工人单独使用“员工个性化”
              排班，对特定日期的班次进行修改。排班后，可以在系统中导出排班表，排班表将按照“员工个性化”优先于“组个性化”、“组个性化”
              优先于“组循环”的优先级，生成考勤组成员排班明细。使用BS考勤机进行打卡，考勤机支持人脸识别、指纹识别、ID卡。考勤机对
              接华一软件，打卡数据实时记录到系统后台。根据原始打卡记录、排班规则，按月导出考勤月报，自动计算有效工作时长、加班时
              长，匹配到不同的计薪规则，从而用于工资的计算。
            </p>
          </div>

          <a href="" data-toggle="collapse" data-target="#banci"><h4 class="text-primary">
            <span><img src="circle-plus.png" alt="" width="20px" height="20px"></span>
            使用华一软件进行常规班次配合弹性班次</h4></a>
          <div class="collapse" id="banci">
            <h5>典型管理需求</h5>
            <p>门店未安装考勤机，每个门店到月底手工统计一份出勤表汇总到人事部进行统计。考勤表由每个门店手工制作，无法保障考勤数据的真实性；数据到月底才汇总到人事部，HR无法实时查看各门店的考勤数据，也无法做到过程监管。特别是促销人员、业务人员，考勤规则非常灵活，无法按照门店店员的班次管理，使考勤管理更加复杂。</p>

            <h5>解决方案</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta qui earum magnam? Facere sed error, fugiat. Corporis, enim fugit dolor.</p>
          </div>
        </div>

        <div class="anli container">
          <h3 class="text-primary">经典案例</h3>
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card">
                <a href="#"><img src="1.jpg" alt=""></a>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos culpa, quidem, dolores voluptatum nobis debitis harum quisquam quam eos eum.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4">
              <div class="card">
                <a href=""><img src="2.png" alt=""></a>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos culpa, quidem, dolores voluptatum nobis debitis harum quisquam quam eos eum.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4">
              <div class="card">
                <a href=""><img src="3.png" alt=""></a>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos culpa, quidem, dolores voluptatum nobis debitis harum quisquam quam eos eum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane container fade" id="product">
        <h2>产品</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum impedit minus quis nam, illum sequi.</p>
      </div>
      <div class="tab-pane container fade" id="about">
        <h2>关于</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio deserunt iste sunt voluptate eius earum voluptatem illum, similique amet deleniti.</p>
      </div>
      <div class="tab-pane container fade" id="test">
        <h2>金融</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio deserunt iste sunt voluptate eius earum voluptatem illum, similique amet deleniti.</p>
      </div>
    </div>


    <div class="more-solution jumbotron jumbotron-fluid">
      <div class="container">
      <h2 class="text-center">我们提供多种行业管理解决方案</h2>
      <p class="text-secondary text-center">华一软件，最佳管理解决方案</p>
      <div class="row">
        <div class="col">
          <div class="media">
            <img src="weixin.png" alt="" class="align-self-center mr-3">
            <div class="media-body">
              <h5>高端制造</h5>
              <p class="text-secondary">还支持将排班细化到多段的任务，让零售业店面管理更加的精细准确。</p>
              <a href="">More></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="media">
            <img src="weixin.png" alt="" class="align-self-center mr-3">
            <div class="media-body">
              <h5>高端制造</h5>
              <p class="text-secondary">还支持将排班细化到多段的任务，让零售业店面管理更加的精细准确。</p>
              <a href="">More></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="media">
            <img src="weixin.png" alt="" class="align-self-center mr-3">
            <div class="media-body">
              <h5>高端制造</h5>
              <p class="text-secondary">还支持将排班细化到多段的任务，让零售业店面管理更加的精细准确。</p>
              <a href="">More></a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="more-product container">
      <h2>华一软件，全方位人力资源管理解决方案</h2>
      <p class="text-secondary">我们始终关注劳动力管理领域，时刻为您创造劳动力管理价值</p>
      <div class="row">
        <div class="col">
          <img src="renshi.png" alt="">
          <a href="">人事管理</a>
        </div>
        <div class="col">
          <img src="kaoqing.png" alt="">
          <a href="">考勤管理</a>
        </div>
        <div class="col">
          <img src="gongzi.png" alt="">
          <a href="">薪资管理</a>
        </div>
        <div class="col">
          <img src="jixiao.png" alt="">
          <a href="">绩效管理</a>
        </div>
      </div>
    </div>

    <div class="connect-us">
      <h3>立即免费体验</h3>
      <p>精确控制劳动力成本，快速提升劳动力效率，优化劳动力管理流程、全面提高劳动力满意度和劳动力管理整体效能。</p>
      <a href="" class="btn btn-lg btn-light">免费试用</a>
      <a href="" class="btn btn-lg btn-outline-light">联系我们</a>      
    </div>


    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  </body>
</html>