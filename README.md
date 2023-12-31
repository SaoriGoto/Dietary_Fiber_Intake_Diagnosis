## Webサービス名
 「食物繊維摂取量診断」  
  自分が食べた食材からどれくらいの食物繊維を摂取できているのか診断するサービスです。

<img width="1436" alt="スクリーンショット 2023-11-02 22 30 31" src="https://github.com/SaoriGoto/Dietary_Fiber_Intake_Diagnosis/assets/126575739/3be73598-fde9-4df9-ba77-5a85a5323e0f">  

<img width="1439" alt="スクリーンショット 2023-11-02 22 32 27" src="https://github.com/SaoriGoto/Dietary_Fiber_Intake_Diagnosis/assets/126575739/5c435384-ae2f-428e-b2ec-10a997d4d8ce">  

## URL
 https://www.dietaryfiber-diagnosis.website  
 ログイン機能は設けておりませんので、そのままご利用いただけます。

## ご利用方法
 トップページの「診断する」から食材登録フォームに進んでいただき、診断したい食材と食べた食材の量を入力します。  
 「結果を表示する」から結果画面に遷移すると入力した食材から摂取できた食物繊維量が棒グラフで表示されます。  
 結果表示画面からは食物繊維を多く含む食材の一覧もご確認いただけます。


## 制作背景
 日々の体調管理を通して「食」がとても重要であると感じ、自分が意識して取るようにしていた栄養素が  
 実際はどれくらい取れているのか手軽に把握できるサービスがあれば良いと思い制作に至りました。  
 栄養素を食物繊維に絞った理由は、食物繊維が含まれている食材について知識が少なかった為、  
 Webサービス制作の過程で学ぶことができればと思い、食物繊維に焦点を当てて制作しました。

## こだわったポイント
 - 直感的に使用できるサービスを目指し、シンプルな設計にしました。  
 - 食材登録フォームの隣に入力の参考となるように食材量目安を配置しました。  
 - 食物繊維を水溶性食物繊維と不溶性食物繊維のテーブルに分けてデータベースに格納し、  
   それぞれの摂取量が棒グラフで表示されるようにしました。  
 - 摂取量の隣に目標値を置き、比較できるようにしました。

## セキュリティ対策
 - HTTPSの導入：サイト全体をHTTPSプロトコルで提供し、データの暗号化を実施しました。  
 - CSRF対策：フォームリクエストにCSRFトークンを導入して、クロスサイトリクエストフォージェリ攻撃対策をしました。  
 - データのバリデーションとエスケープ：ユーザー入力データに対してバリデーションとエスケープを実装し、XSS対策をしました。

## 実装予定項目
 - ログイン機能、マイページ記録機能
 - 複数の食材データを1本の棒グラフに色分けして表示
 - レスポンシブデザイン
 - テストコードを使用してのテスト

## 使用技術
 - PHP 8.1.24
 - JavaScript
 - HTML
 - CSS
 - Laravel 10.28.0
 - MariaDB 11.1.2
 - Visual Studio Code