<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('会社案内') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(2) ?>
<!-- BaserPageTagEnd -->

<h2>会社案内</h2>

<h3>会社データ</h3>

<table>
	<tbody>
		<tr>
			<th>会社名</th>
			<td>baserCMSサンプル</td>
		</tr>
		<tr>
			<th>設立</th>
			<td>2020年9月</td>
		</tr>
		<tr>
			<th>所在地</th>
			<td>福岡県福岡市</td>
		</tr>
		<tr>
			<th>事業内容</th>
			<td>
			<ul>
				<li>事業内容１</li>
				<li>事業内容２</li>
				<li>事業内容３</li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>

<h3>アクセスマップ</h3>
<?php $this->BcBaser->googleMaps(["width" => 585]) ?>