<!-- Menu déroulant pour accéder aux différentes méthodes de l'API -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Interface API</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sellers <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GetSellerInformation</a></li>
            <li><a href="#">GetSellerIndicators</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="GetOfferListPaginated.php">GetOfferListPaginated</a></li>
            <li><a href="SubmitOfferPackage.php">SubmitOfferPackage</a></li>
            <li><a href="GetOfferPackageSubmissionResult.php">GetOfferPackageSubmissionResult</a></li>                
          </ul>
        </li>  
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GetAllowedCategoryTree</a></li>
            <li><a href="#">GetAllAllowedCategoryTree</a></li>
            <li><a href="#">GetProductList</a></li>
            <li><a href="#">GetModelList</a></li>
            <li><a href="#">GetBrandList</a></li>
            <li><a href="#">SubmitProductPackage</a></li>
            <li><a href="#">GetProductPackageSubmissionResult</a></li>
            <li><a href="#">GetProductPackageProductMatchingFillData</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GetOrderList</a></li>
            <li><a href="#">GetGlobalConfiguration</a></li>
            <li><a href="#">ValidateOrderList</a></li>
            <li><a href="#">CreateRefundVoucher</a></li>
            <li><a href="#">ValidateOrderListAfterShipment</a></li>
            <li><a href="#">ManageParcel</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relays <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GetParcelShopList</a></li>
            <li><a href="#">SubmitRelaysFile</a></li>
            <li><a href="#">GetRelaysFileSubmissionResult</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Discussions <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GetOrderClaimList</a></li>
            <li><a href="#">GetOfferQuestionList</a></li>
            <li><a href="#">GetOrderQuestionList</a></li>
            <li><a href="#">CloseDiscussionList</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Webmail <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">GenerateDiscussionMailGuid</a></li>
            <li><a href="#">GetDiscussionMailList</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>