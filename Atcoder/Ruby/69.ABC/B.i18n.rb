x=gets.chomp

xx=x.split(//)
xxx=xx.delete_at(0)
xxxx=xx.delete_at(-1)
answer=xx.size

puts xxx+answer.to_s+xxxx