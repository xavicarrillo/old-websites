#!/usr/bin/bash
#$1 es el SO (hay un directorio para cada SO)
#$2 es el target (apache por ejemplo)
#$3 es la version (1.3.26 p.e.)

if test -n "$3"
then
	for x in `find bbdd/$1|grep $2`
	do
		if test $3 = "nom" #si la busqueda es por nombre de exploit le pasamos "nom" como tercer parametro
		then
			cat $x
			exit 0
		fi

		version=`ls $x|awk -F\- {'print $2'}|grep $3`
		if test -n "$version"
		then
			cat $x
			echo -e "\n"
		fi
	done
else
	for x in `find bbdd/$1|grep $2`
	do
		target=`ls $x|awk -F\- {'print $1'}|grep $2`
		#aquesta comprobacio la fem perque podria donar-se el cas que el target coincidis amb la versió 
                if test -n "$target"
		then
	        	cat $x
			echo -e "\n"
		fi
	done
fi
