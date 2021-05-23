s=gets.chomp

ss=s.reverse

replace= ss.gsub!(/6|9/,"6"=> "9", "9" => "6")


print ss
