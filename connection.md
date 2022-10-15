# Database connection creditals

```json
{
  "HOST": "us-east.connect.psdb.cloud",
  "USERNAME": "q21vlg5mwqc30sa2lhzy",
  "PASSWORD": "pscale_pw_excbkzL56tlgSK2zzUDfXcpppgQS0nuJujspcg6DdxG",
  "DATABASE": "iot"
}
```

# SCHEMA
```sql
CREATE TABLE `temperature` (
	`id` int NOT NULL AUTO_INCREMENT,
	`device_name` varchar(60) NOT NULL,
	`temperature` float NOT NULL,
	`added_time` datetime DEFAULT CURRENT_TIMESTAMP(),
	PRIMARY KEY (`id`)
) ENGINE InnoDB,
  CHARSET utf8mb4,
  COLLATE utf8mb4_unicode_ci;
```