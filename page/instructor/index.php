<?php include('../../function/function.php'); ?>
<?php include ( WORKSPACE . '/include/header.php' ); ?>

        <!-- page content -->
        <main class="right_col" role="main">
          <form class="forms" data-parsley-validate novalidate>

            <div class="page-title">
              <div class="title_left">
                <h1>インストラクター <small>instructor</small></h1>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="left-col">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>プロフィール編集 <small>Profile Edit</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
      
                        <div class="x_content">
                          <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 profile_left">
                              <div class="profile_img">
                                <div id="crop-avatar">
                                  <div id="myAvatar" class="dropzone dz-clickable avatarzone"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                              <div class="form-horizontal form-label-left input_mask">
                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="instructor Name">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                  </div>
                                  
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="WebSite or Blog">
                                    <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
                                  </div>
            
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Facebook URL">
                                    <span class="fa fa-facebook form-control-feedback left" aria-hidden="true"></span>
                                  </div>
                                  
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Twitter URL">
                                    <span class="fa fa-twitter form-control-feedback left" aria-hidden="true"></span>
                                  </div>
                                  
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Instagram URL">
                                    <span class="fa fa-instagram form-control-feedback left" aria-hidden="true"></span>
                                  </div>
            
                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                  </div>
      
                                </div>
                              </div>
                            </div>
      
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <h4>プロフィール画像</h4>
                              <div class="pose_img">
                                <div id="crop-pose">
                                  <div id="myPose" class="dropzone dz-clickable"></div>
                                </div>
                              </div>
                            </div>
      
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <h4>プロフィール</h4>
                              <textarea id="message" required="required" class="form-control resize-vertical mb-pc-20" name="message" rows="10" placeholder="あなたの経歴や受賞歴などをご記入ください。" data-parsley-trigger="keyup" data-parsley-maxlength="400" data-parsley-maxlength-message="プロフィールが長すぎます。（400文字）" data-parsley-validation-threshold="10"></textarea>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 mb-pc-20">
                              <h4>活動エリア</h4>
                              <div class="">
                                <div class="row">
                                  <div class="col-sm-4 col-xs-12 mb-sp-10">
                                    <select class="form-control" name="area[]">
                                      <option>選択してください</option>
                                      <?php echo $cdClass->prefSelect(); ?>
                                    </select>
                                  </div>
                                  <div class="col-sm-4 col-xs-12 mb-sp-10">
                                    <select class="form-control" name="area[]">
                                      <option>選択してください</option>
                                      <?php echo $cdClass->prefSelect(); ?>
                                    </select>
                                  </div>
                                  <div class="col-sm-4 col-xs-12 mb-sp-10">
                                    <select class="form-control" name="area[]">
                                      <option>選択してください</option>
                                      <?php echo $cdClass->prefSelect(); ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
      
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <h4>ヨガのスタイル</h4>
                              <div id="style-list" class="list-js">
                                <div class="row">
                                  <div class="col-md-6 col-sm-6 col-xs-8">
                                    <input type="text" class="search form-control" placeholder="絞り込み" />
                                  </div>
                                  <div class="col-md-3 col-sm-3 col-xs-4">
                                    <button class="btn btn-default btn-block sort" data-sort="style-name">ソート</button>
                                  </div>
                                </div>
                                <ul class="list list-group">
                                  <?php
                                    $array = $cdClass->styleArray();
                                    $i = 0;
                                    foreach ($array as $key => $value) :
                                  ?>
                                  <li>
                                    <div class="md-checkbox">
                                      <input id="md-<?php echo $i; ?>" type="checkbox" value="<?php echo $key; ?>"><label for="md-<?php echo $i; ?>"></label>
                                    </div>
                                    <p class="style-name"><?php echo $value[0]; ?> <small><?php echo $value[1]; ?></small></p>
                                  </li>
                                  <?php
                                    $i++;
                                    endforeach;
                                  ?>
                                </ul>
                                <ul class="pagination"></ul>
                              </div>
                            </div>
                            <!-- </div> -->
                          </div>
                        </div><!-- x-content -->
                        
                      </div><!-- x-panel -->
                    </div>
                    
                    <div class="col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>インタビュー<small>Interview</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-add-row interview-add">
                              <table class="table table-striped table-bordered">
                                <tbody>
                                  <tr>
                                    <td class="td-question">
                                      <select class="form-control">
                                        <?php echo $cdClass->interviewSelect(1);?>
                                      </select>
                                      <textarea class="form-control resize-vertical" placeholder="質問の答えを記入"></textarea>
                                    </td>
                                    <td class="td-button">
                                      <button class="btn btn-default btn-circle btn-remove-row">－</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="td-question">
                                      <select class="form-control">
                                        <?php echo $cdClass->interviewSelect(2);?>
                                      </select>
                                      <textarea class="form-control resize-vertical" placeholder="質問の答えを記入"></textarea>
                                    </td>
                                    <td class="td-button">
                                      <button class="btn btn-default btn-circle btn-remove-row">－</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="td-question">
                                      <select class="form-control">
                                        <?php echo $cdClass->interviewSelect(3);?>
                                      </select>
                                      <textarea class="form-control resize-vertical" placeholder="質問の答えを記入"></textarea>
                                    </td>
                                    <td class="td-button">
                                      <button class="btn btn-default btn-circle btn-remove-row">－</button>
                                    </td>
                                  </tr>
                                  <tr class="tr-add-row">
                                    <td class="td-question">
                                      <select class="form-control">
                                        <?php echo $cdClass->interviewSelect();?>
                                      </select>
                                      <textarea class="form-control resize-vertical" placeholder="質問の答えを記入"></textarea>
                                    </td>
                                    <td class="td-button">
                                      <button class="btn btn-default btn-circle btn-plug-row">＋</button>
                                      <button class="btn btn-default btn-circle btn-remove-row">－</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <script>
                                <!--
                                  $(function(){
                                    var tr;
                                    var element = $('.interview-add');
                                    element.find('.btn-add-row').on('click',function(){
                                      tr = element.find('.tr-add-row').clone(true);
                                      $(this).closest('.table-add-row').find('tbody .tr-add-row').before(tr);
                                      tr.fadeIn(500).removeClass('tr-add-row');
                                      _texrareaAutoHeight();
                                      _checkRowNumber(element,5);
                                      return false;
                                    });
                                    element.find('.btn-plug-row').on('click',function(){
                                      tr = element.find('.tr-add-row').clone(true);
                                      $(this).closest('tr').before(tr);
                                      tr.fadeIn(500).removeClass('tr-add-row');
                                      _texrareaAutoHeight();
                                      _checkRowNumber(element,5);
                                      return false;
                                    });
                                    element.find('.btn-remove-row').on('click',function(){
                                      tr = $(this).closest('tr');
                                      tr.fadeOut(500,function(){
                                        tr.remove();
                                        _checkRowNumber(element,5);
                                      });
                                      return false;
                                    });
                                  });
                                -->
                              </script>
                              <button class="btn btn-default btn-add-row">質問を追加</button>
                            </div>
                          </div>
                        </div><!-- /x-content -->
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- col-left -->
              
              <div class="col-right">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    
                    <div class="col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>所属スタジオ<small>Studio</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>登録スタジオ</h4>
                              <div id="studio-list" class="list-js">
                                <ul class="list list-group">
                                  <li>
                                    <span class="shop-name">オハナスマイル ヨガスタジオ 祐天寺</span><span class="pref-name">東京都</span>
                                    <select class="form-control case">
                                    <?php foreach($dataClass->getValues(3) as $key => $value) : ?>
                                      <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    <input type="hidden" class="data-id" value="01">
                                  </li>
                                  <li>
                                    <span class="shop-name">オハナスマイル ヨガスタジオ 駒沢大学</span><span class="pref-name">東京都</span>
                                    <select class="form-control case">
                                    <?php foreach($dataClass->getValues(1) as $key => $value) : ?>
                                      <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    <input type="hidden" class="data-id" value="02">
                                  </li>
                                  <li>
                                    <span class="shop-name">ヨガアカデミー大阪</span><span class="pref-name">神奈川県</span>
                                    <select class="form-control case">
                                    <?php foreach($dataClass->getValues(2) as $key => $value) : ?>
                                      <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    <input type="hidden" class="data-id" value="03">
                                  </li>
                                </ul>
                              </div>
      
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-studio-modal-lg">スタジオ追加</button>
                                </div>
                                <?php include( WORKSPACE . '/include/modal-studio.php'); ?>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <h4>登録スタジオがない場合</h4>
                                  <textarea id="studio-free" class="form-control resize-vertical mb-pc-20" name="studio-free" rows="10" placeholder="スタジオの登録がない場合などにご記入ください" data-parsley-trigger="keyup" data-parsley-maxlength="400" data-parsley-maxlength-message="プロフィールが長すぎます。（400文字）" data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
      
                            </div>
                          </div>
                        </div><!-- /x-content -->
                      </div>
                    </div>

                    <div class="col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>資格<small>License</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>登録資格</h4>
                              <!--
                              <div id="license-list" class="list-js">
                                <ul class="list list-group">
                                  <li class="list-table">
                                    <div class="list-cell">
                                      <div class="md-checkbox">
                                        <input id="md-license-01" type="checkbox" value="license-01"><label for="md-license-01"></label>
                                      </div>
                                    </div>
                                    <div class="list-cell">
                                      <span class="license-parent-name">全米ヨガアライアンス</span><span class="license-child-name">RYT200</span><br>
                                      <span class="license-name">ヨガジェネレーション指導者養成講座</span><span class="license-teacher-name">中島正明</span>
                                    </div>
                                    <div class="list-cell">
                                      <?php $cdClass->yearmonthSelect(); ?>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              -->
                              <div id="license-list">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-add-row license-add">
                                    <table class="table table-striped table-bordered">
                                      <tbody class="list">
                                        <tr>
                                          <td class="td-check">
                                            <div class="md-checkbox">
                                              <input id="license-01" type="checkbox" value="license-01"><label for="license-01"></label>
                                            </div>
                                          </td>
                                          <td class="td-question">
                                            <?php $cdClass->yearmonthSelect(); ?>
                                            <span class="license-parent-name">全米ヨガアライアンス</span><span class="license-child-name">RYT200</span><br>
                                            <span class="license-name">ヨガジェネレーション指導者養成講座</span><span class="license-teacher-name">中島正明</span>
                                            <input type="hidden" class="data-id" value="01">
                                          </td>
                                          <td class="td-button">
                                            <button class="btn btn-default btn-circle btn-remove-row" data-id="01">－</button>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="td-check">
                                            <div class="md-checkbox">
                                              <input id="license-03" type="checkbox" value="license-03"><label for="license-03"></label>
                                            </div>
                                          </td>
                                          <td class="td-question">
                                            <?php $cdClass->yearmonthSelect(); ?>
                                            <span class="license-parent-name">インド政府公認</span><span class="license-child-name">インド政府公認校認定</span><br>
                                            <span class="license-name">ヨガ指導者養成講座（ヨガ哲学）1年</span><span class="license-teacher-name">クリシュナ・グルジ</span>
                                            <input type="hidden" class="data-id" value="03">
                                          </td>
                                          <td class="td-button">
                                            <button class="btn btn-default btn-circle btn-remove-row" data-id="03">－</button>
                                          </td>
                                        </tr>
                                        <tr class="tr-add-row">
                                          <td class="td-check">
                                            <div class="md-checkbox">
                                              <input id="" class="license-check" type="checkbox" value=""><label for=""></label>
                                            </div>
                                          </td>
                                          <td class="td-question">
                                            <?php $cdClass->yearmonthSelect(); ?>
                                            <span class="license-parent-name"></span><span class="license-child-name"></span><br>
                                            <span class="license-name"></span><span class="license-teacher-name"></span>
                                            <input type="hidden" class="data-id" value="">
                                          </td>
                                          <td class="td-button">
                                            <button class="btn btn-default btn-circle btn-remove-row" data-id="">－</button>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <script>
                                      <!--
                                        $(function(){
                                          var tr;
                                          var element = $('.license-add');
                                          element.find('.btn-remove-row').on('click',function(){
                                            var id = $(this).attr('data-id');
                                            tr = $(this).closest('tr');
                                            tr.fadeOut(500,function(){
                                              tr.remove();
                                              _checkRowNumber(element,5);
                                            });
                                            $('#modal-license-list .data-id-' + id).prop('disabled',false);
                                            $('#modal-license-list .data-id-' + id).text('追加');
                                            return false;
                                          });
                                        });
                                      -->
                                    </script>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-license-modal-lg">資格追加</button>
                                </div>
                                <?php include( WORKSPACE . '/include/modal-license.php'); ?>
                              </div>
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <h4>登録資格がない場合</h4>
                                  <textarea id="license-free" class="form-control resize-vertical mb-pc-20" name="license-free" rows="10" placeholder="資格の登録がない場合などにご記入ください" data-parsley-trigger="keyup" data-parsley-maxlength="400" data-parsley-maxlength-message="プロフィールが長すぎます。（400文字）" data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /x-content -->
                      </div>
                    </div>

                    <div class="col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>参加イベント<small>Event</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>開催イベント</h4>
                              <div id="event-list" class="list-js">
                                <ul class="list list-group">
                                  <li>
                                    <time class="event-date">2017年10月09日（月）</time>
                                    <span class="event-name">dusk</span><span class="event-pref-name">東京都</span>
                                    <select class="form-control case">
                                    <?php foreach($dataClass->getValues(3) as $key => $value) : ?>
                                      <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    <input type="hidden" class="data-id" value="01">
                                  </li>
                                </ul>
                              </div>
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-event-modal-lg">イベント追加</button>
                                </div>
                                <?php include( WORKSPACE . '/include/modal-event.php'); ?>
                              </div>
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <h4>登録イベントがない場合</h4>
                                  <textarea id="event-free" class="form-control resize-vertical mb-pc-20" name="event-free" rows="10" placeholder="イベントの登録がない場合などにご記入ください" data-parsley-trigger="keyup" data-parsley-maxlength="400" data-parsley-maxlength-message="プロフィールが長すぎます。（400文字）" data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /x-content -->
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- col-right -->

              <div class="col-footer">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="ln_solid"></div>
                    <div class="form-group text-center">
                      <div class="col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-3 col-xs-6">
                        <button type="button" class="btn btn-primary btn-block">非公開</button>
                      </div>
                      <div class="col-md-2 col-sm-3 col-xs-6">
                        <button type="submit" class="btn btn-success btn-block">保存</button>
                      </div>
                    </div>
                </div>
              </div>

            </div>
          </form>
        </main>
        <!-- /page content -->

<?php include( WORKSPACE . '/include/footer.php' ); ?>