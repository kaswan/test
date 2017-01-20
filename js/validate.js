	// $.validator.setDefaults({
	// 	submitHandler: function() {
	// 		alert("submitted!");
	// 	}
	// });

	$().ready(function() {		
        $.validator.addMethod("zipTelRegex", function(value, element) {
          return this.optional(element) || /^[0-9\-\s]+$/i.test(value);
        }, "Username must contain only letters, numbers, or dashes.");
        
        //全角ひらがな･カタカナのみ
        $.validator.addMethod("kana", function(value, element) {
          return this.optional(element) || /^[ァ-ヶーぁ-ん]+$/i.test(value);
        }, "全角カナを入力してください");

        //郵便番号（例:012-3456）
        $.validator.addMethod("postnum", function(value, element) {
          return this.optional(element) || /^\d{3}\-\d{4}$/.test(value);
        }, "郵便番号を入力してください（例:123-4567）");

        //携帯番号（例:010-2345-6789）
        $.validator.addMethod("mobilenum", function(value, element) {
          return this.optional(element) || /^0\d0-\d{4}-\d{4}$/.test(value);
        }, "携帯番号を入力してください（例:010-2345-6789）");
        
        //電話番号（例:012-345-6789）
        $.validator.addMethod("telnum", function(value, element) {
          return this.optional(element) || /^[0-9-]{12}$/.test(value);
        }, "電話番号を入力してください（例:012-345-6789）");

		// validate signup form on keyup and submit
		$("#commentForm").validate({
			rules: {
				last_name: "required",
				first_name: "required",
				last_name_kana: {
					required: true,
					kana: true
				},
				first_name_kana: {
					required: true,
					kana: true
				},
				gender: "required",
				year: {
					required: true,
					number: true
				},				
				month: {
					required: true,
					number: true
				},
				day: {
					required: true,
					number: true
				},
				zip: {
					required: true,
					zipTelRegex: true
				},
				address_city: "required",				
				phone: {
					required: true,
					zipTelRegex: true
				},
				email: {
					required: true,
					email: true
				},				
			},
			messages: {
				last_name: "お名前(姓)を入力してください",
				first_name: "お名前(名)を入力してください",
				last_name_kana: {
					required: "お名前(セイ)を入力してください",
					kana: "全角カナを入力してください"
				},
				first_name_kana: {
					required: "お名前(メイ)を入力してください",
					kana: "全角カナを入力してください"
				},
				gender: "性別を選んでください",
				year: "生年月日(年)を選んでください",
				month: "生年月日(月)を選んでください",
				day: "生年月日(日)を選んでください",
				email: {
					required: "メールアドレスを入力してください",
					email: "メールアドレスの形式が正しくありません"
				},
				phone: {
					required: "お電話番号を入力してください",
					zipTelRegex: "半角数字を入力してください"
				},
				zip: {
					required: "郵便番号を入力してください",
					zipTelRegex: "半角数字を入力してください"
				},
				address_city: "ご住所(市区町村名)を入力してください",
				
			}
		});
		
	});